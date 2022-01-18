<?php

namespace App\Http\Controllers;

use App\Models\ProductLabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DataTables;

class ProductLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $product_labels = ProductLabel::all();
            return DataTables::of($product_labels)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.product_label.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_label.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        $product_labelData = ProductLabel::create($data);

        return redirect()->route('product_label.index')->with([
            'success' => trans('Product Label create successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductLabel  $productLabel
     * @return \Illuminate\Http\Response
     */
    public function show(ProductLabel $productLabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductLabel  $productLabel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product_label = ProductLabel::findOrFail($id);
        return view('admin.product_label.edit', compact('product_label'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductLabel  $productLabel
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
        $oldData = ProductLabel::find($id);
        $oldData['updated_by'] = $user->id;

        $oldData->update($data);

        return redirect()->route('product_label.index')->with([
            'success' => trans('Product Label updated successfully')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductLabel  $productLabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = ProductLabel::find($id);
                $data->delete();
                return response()->json(['success' => 'place deleted']);
            } catch (Exception $e) {
                return response()->json([
                    'status' => 500,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }
}
