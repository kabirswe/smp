<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Post;
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
        return view('front.home', compact(' '));
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
        $type = ProductType::where('slug', $slug)->first('id');
        $products = Product::where('product_type_id', $type->id)
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->paginate(1);
        return view('front.product_page', compact('products'));
    }

    public function product_category(Request $request, $slug)
    {
        $category = ProductCategory::where('slug', $slug)->first('id');
        dd($category);
        $products = Product::whereHas('product_product_categories', function($q) {
            $q->where('product_categorie_id', $category->id);
        })
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->orderBy('id')
        ->paginate(1);
        dd($products);
        return view('front.product_page', compact('products'));
    }

    public function product_details(Request $request, $slug)
    {
        $products = Product::where('slug', $slug)
        ->with([
            'images:id,product_id,is_cover_image,image,image_sm,image_md',
            'product_product_categories',
            'product_product_categories.category',
            'type:id,name'
        ])
        ->first();
        return view('front.product-details');
    }

    public function blog()
    {
        $posts = Post::simplePaginate(5);
        return view('front.blog',compact('posts'));
    }
    public function blog_details()
    {
        return view('front.blog-details');
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


}
