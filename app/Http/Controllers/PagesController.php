<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
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
}