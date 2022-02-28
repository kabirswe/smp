<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\ProductProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use DataTables;
use Exception;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:product', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }


    // image upload in S3
    protected function imageUpload($requestFile, $location_main)
    {
        if (!is_dir(public_path('upload'))) {
            mkdir(public_path('upload'), 0777);
        }
        $main_image = $requestFile;
        $extension = $main_image->getClientOriginalExtension();
        $location = "/upload/product/$location_main/";
        $ImgName = date('Ymdhis') . rand(10000, 99999) . '.' . $extension;
        $ImgName_md = date('Ymdhis') . rand(10000, 99999) . '_md800x800.' . $extension;
        $ImgName_sm = date('Ymdhis') . rand(10000, 99999) . '_sm=660x520.' . $extension;
        // Instantiate SimpleImage class
        $image = Image::make($main_image)->encode($extension, 75);
        $image_md = Image::make($main_image)->resize(1600, 1600, function ($aspect) {
            $aspect->aspectRatio();
        })->encode($extension, 60);
        $image_sm = Image::make($main_image)->resize(1320, 1040, function ($aspect) {
            $aspect->aspectRatio();
        })->encode($extension, 60);
        // Size:large
        // Storage::disk('local')->put($location . $ImgName, (string) $image);
        // // Size:medium
        Storage::disk('local')->put($location . $ImgName_md, (string) $image_md);
        // // Size:small
        Storage::disk('local')->put($location . $ImgName_sm, (string) $image_sm);

        $filename['image'] = "/upload/product/$location_main/" . $ImgName_md;
        $filename['image_md'] = "/upload/product/$location_main/" . $ImgName_md;
        $filename['image_sm'] = "/upload/product/$location_main/" . $ImgName_sm;
        return $filename;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::all();
            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ProductType::select('id', 'name')->get();
        $categories = ProductCategory::select('id', 'name')->get();
        return view('admin.product.create', compact('types', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'name' => 'required|max:200'
        ],[
            'name.unique' => trans('error.name')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }


        $data['created_by'] = $user->id;
        $data['updated_by'] = $user->id;

        $productData = Product::create($data);

         // category data save
         if (!empty($data['categories'])) {
            foreach ($request->categories as $id) {
                ProductProductCategory::create([
                    'product_categorie_id' => $id,
                    'product_id' => $productData->id
                ]);
            }
        }
        // cover image data save
        if($data['coverimage'] != "") {
            $filename = $this->imageUpload($data['coverimage'], 'coverimage');
            ProductImage::create([
                'product_id' => $productData->id,
                'image' => $filename['image'],
                'image_sm' => $filename['image_md'],
                'image_md' => $filename['image_sm'],
                'is_cover_image' => 1,
                'created_by' =>  $user->id,
                'updated_by' => $user->id
            ]);
        }
        // thumbnail image data save
        if (!empty($data['thumbnail_image'])) {
            foreach ($request->thumbnail_image as $data) {
                $filename = $this->imageUpload($data, 'image');
                ProductImage::create([
                    'product_id' => $productData->id,
                    'image' => $filename['image'],
                    'image_sm' => $filename['image_md'],
                    'image_md' => $filename['image_sm'],
                    'is_cover_image' => 0,
                    'created_by' =>  $user->id,
                    'updated_by' => $user->id
                ]);
            }
        }

        return redirect()->route('product.index')->with([
            'success' => trans('Product create successfully')
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $types = ProductType::select('id', 'name')->get();
        $categories = ProductCategory::select('id', 'name')->get();
        $selected_categories = ProductProductCategory::where('product_id', $product->id)->pluck('product_categorie_id')->toArray();
        $selected_images = ProductImage::where('product_id', $product->id)->get();
        return view(
            'admin.product.edit',
            compact(
                'product',
                'types',
                'categories',
                'selected_categories',
                'selected_images'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $data = $request->all();
        $validation = Validator::make($data, [
            'name' => 'required|max:100'
        ],[
            'name.unique' => trans('error.name')
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $oldData = Product::find($id);
        $oldData['updated_by'] = $user->id;

        $oldData->update($data);

        return redirect()->route('product.index')->with([
            'success' => trans('Product updated successfully')
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = Product::find($id);
                $data->delete();
                return response()->json(['success' => 'product deleted']);
            } catch (Exception $e) {
                return response()->json([
                    'status' => 500,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }
}
