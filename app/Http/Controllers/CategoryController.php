<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::all();
            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('action-btn', function($row) {
                    return $row->id;
                })
                ->rawColumns(['action-btn'])
                ->make(true);
        }
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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

        $categoryData = Category::create($data);

        return redirect()->route('category.index')->with([
            'success' => trans('Category create successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
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
        $oldData = Category::find($id);
        $oldData['updated_by'] = $user->id;

        $oldData->update($data);

        return redirect()->route('category.index')->with([
            'success' => trans('Category updated successfully')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            try {
                $data = Category::find($id);
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
