<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
/**
 * Home Page Show
 * 
*/
    public function homePageShow()
    {
        return view('homepage');
    }
/**
 * About Page Show
 * 
*/
    public function aboutPageShow()
    {
        return view('about');
    }
/**
 * Contact Page Show
 * 
*/
    public function contactPageShow()
    {
        return view('pages/contact');
    }
}
