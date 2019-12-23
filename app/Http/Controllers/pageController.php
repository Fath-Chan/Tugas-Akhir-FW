<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function ourCauses()
    {
        return view('ourCauses');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}
