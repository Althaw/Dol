<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexfun($value='')
    {
    	return view('frontend.master');
    }
    public function detailfun($value='')
    {
    	return view('frontend.movie_detail');
    }
    public function landingfun($value='')
    {
    	return view('frontend.landing');
    }
    public function commingfun($value='')
    {
    	return view('frontend.commingsoon');
    }
}
