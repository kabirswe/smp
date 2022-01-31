<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;
// use DataTables;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        
        $validation = Validator::make($data, [
            'post_id' => 'required',
            'name' => 'required|max:50',
            'email' => 'required|max:100',
            'website' => 'required|max:50',
            'comment' => 'required|max:2000',
        ],[
            'post_id' => trans('error.name'),
            'name' => trans('error.name'),
            'email' => trans('error.name'),
            'website' => trans('error.name'),
            'comment' => trans('error.name'),
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $postcommentData = PostComment::create($data);
        $post = Post::where('id', $request->post_id)->first('slug');        
        return redirect()->route('blog.details', $post->slug)->with([
            'success' => trans('Comment send successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function show(PostComment $postComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
    }
}
