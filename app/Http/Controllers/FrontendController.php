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
        return view('frontpage');
    }
    
    public function aboutpage()
    {
        return view('aboutpage');
    }


}
