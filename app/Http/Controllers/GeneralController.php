<?php

namespace App\Http\Controllers;

class GeneralController extends Controller
{
    // view index.blade.php
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }
}
