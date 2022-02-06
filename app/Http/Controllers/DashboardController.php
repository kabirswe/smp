<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $orders = Order::take(5)->get();
        $post_comments = PostComment::take(5)->get();
        $product_all = Product::select('id')->count();
        $post_all = Post::select('id')->count();
        $post_comment_all = PostComment::select('id')->count();
        return view('admin.dashboard', compact('orders','product_all','post_all','post_comment_all', 'post_comments'));
    }
    
}
