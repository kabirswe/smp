<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Rating;
use App\Models\Order;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pre_manufactured_swiper = Product::with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            // 'product_product_categories.product',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->take(10)
        ->get();
        // dd($pre_manufactured_swiper);
        return view('front.home', compact('pre_manufactured_swiper'));
    }

    public function supplement_manufacturing()
    {
        return view('front.supplement-manufacturing');
    }
    public function meet_the_team()
    {
        return view('front.meet-the-team');
    }
    public function awards_certifications()
    {
        return view('front.awards-certifications');
    }
    public function labdoor_partnership()
    {
        return view('front.labdoor-partnership');
    }
    public function who_to_contact()
    {
        return view('front.who-to-contact');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function fulfillment()
    {
        return view('front.fulfillment');
    }

    public function product_type(Request $request, $slug)
    {
        $type = ProductType::where('slug', $slug)->first();
        // dd($type);
        $products = Product::where('product_type_id', $type->id)
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->paginate(1);
        return view('front.product_page', compact('products','type'));
    }

    public function product_category(Request $request, $slug)
    {
        $category = ProductCategory::where('slug', $slug)->first();
        $category_id = $category->id;
        $products = Product::whereHas('product_product_categories.category', function($q) use($category_id) {
            $q->where('product_categorie_id', $category_id);
        })
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        // ->get();
        ->paginate(10);
        // dd($products->toArray());        
        return view('front.product_page', compact('products','category' ));
    }

    public function product_details(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->first();
        // dd($product);
        $product_ratings = Rating::where('product_id', $product->id)->get();
        $orders = Order::where('product_id', $product->id)->get();
        return view('front.product-details', compact('product', 'product_ratings','orders'));
    }

    public function blog()
    {
        $posts = Post::paginate(10);
        return view('front.blog',compact('posts'));
    }
    public function blog_details(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        // dd($post->id);
        $comments = PostComment::where('post_id', $post->id)->get();
        // dd($comments);
        return view('front.blog-details', compact('post','comments'));
    }
    public function capsule_manufacturing()
    {
        return view('front.capsule-manufacturing');
    }
    public function tablet_manufacturing()
    {
        return view('front.tablet-manufacturing');
    }
    public function powder_manufacturing()
    {
        return view('front.powder-manufacturing');
    }
    public function softgel_manufacturing()
    {
        return view('front.softgel-manufacturing');
    }
    public function gummy_vitamin_manufacturing()
    {
        return view('front.gummy-vitamin-manufacturing');
    }
    public function liquid_capsule()
    {
        return view('front.liquid-capsule');
    }
    public function request_quote()
    {
        return view('front.request-quote');
    }
    public function contact()
    {
        return view('front.contact');
    }
    // public function rating()
    // {
    //     return view('front.rating');
    // }


}
