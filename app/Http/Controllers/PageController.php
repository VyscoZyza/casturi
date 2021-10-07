<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index(Request $request)
    {
        return view('index');
    }
    public function About(Request $request)
    {
        return view('about');
    }
    public function News(Request $request)
    {
        return view('news');
    }
    public function Draft(Request $request)
    {
        return view('draft');
    }
}
