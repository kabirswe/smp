<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pre_manufactured_swiper = Product::with('images:is_cover_image,image,image_sm,image_md')
        ->with('productCategory')
        ->with('type:id,name')
        ->orderBy('id')
        ->limit(100)
        ->get();
        dd($pre_manufactured_swiper);
        return view('front.home');
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
    public function product_page()
    {
        return view('front.product_page');
    }
    public function product_details()
    {
        return view('front.product-details');
    }
    public function blog()
    {
        return view('front.blog');
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
