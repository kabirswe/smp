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
}
