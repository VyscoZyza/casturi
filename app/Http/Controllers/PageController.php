<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index(Request $request)
    {
        // main page
        return view('index');
    }
    public function About(Request $request)
    {
        // about page
        return view('about');
    }
    public function News(Request $request)
    {
        // news about product
        return view('news');
    }
    public function Draft(Request $request)
    {
        return view('draft');
    }
}
