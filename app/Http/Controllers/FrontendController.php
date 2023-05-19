<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
/**
 * Home Page Show
 * 
*/
    public function frontpage()
    {
        return view('front-page');
    }
    
    public function hello()
    {
        return view('hello');
    }


}
