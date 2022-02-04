<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Order;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Rating;
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

    public function search(Request $request){

        $search = $request->query('search');

        $results = Product::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->select('name', 'slug')
                    // ->orWhere('body', 'LIKE', "%{$search}%")
                    ->get();
        // return view('search', compact('results'));
        return response()->json($results);
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

    public function product_list(Request $request)
    {
        $products = Product::with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->paginate(10);
        return view('front.product_page', compact('products'));
    }
    public function product_type(Request $request, $slug)
    {
        $type = ProductType::where('slug', $slug)->first();
        $product_all = Product::select('id')->count();
        // dd($type);
        $products = Product::where('product_type_id', $type->id)
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->paginate(10);
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
        $related_products = Product::where('product_type_id', $product->product_type_id)
        ->whereNotIn('id', [$product->id])
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->take(3)
        ->get();
        // dd($related_products);
        $ratings = Rating::where('product_id', $product->id)->get();
        return view('front.product-details', compact('product', 'related_products', 'ratings'));
    }

    public function blog(Request $request)
    {
        $category = $request->query('category');
        $month = $request->query('month');

        if (isset($category)) {
            $posts = Post::where('slug', $category)->paginate(10);
        } elseif (isset($month)) {
            $posts = Post::whereMonth('created_at', $month)->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }
        $latest_posts = Post::select('id', 'slug', 'title')->orderBy('id', 'desc')->take(5)->get();
        return view('front.blog', compact('posts', 'latest_posts'));
    }
    public function blog_details(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        // dd($post->id);
        $comments = PostComment::where('post_id', $post->id)->get();
        $latest_posts = Post::select('id', 'slug', 'title')->orderBy('id', 'desc')->take(5)->get();
        $random_post = Post::select('slug')->get();
        $random_post_prev = Post::whereNotIn('id',  [$post->id])->inRandomOrder()->first();
        // dd($post->id);
        $random_post_next = Post::whereNotIn('id',  [$random_post_prev->id])->inRandomOrder()->first();
        // dd($random_post_prev, $random_post_next);
        return view('front.blog-details', compact('post', 'comments', 'latest_posts','random_post_next', 'random_post_prev'));
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
    public function gummy_vitamin_manufacturing()
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
        return view('front.gummy-vitamin-manufacturing', compact('pre_manufactured_swiper'));
    }
    public function softgel_manufacturing()
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
        return view('front.softgel-manufacturing', compact('pre_manufactured_swiper'));
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
    public function design()
    {
        return view('front.design');
    }


}
