<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function partners()
    {
        return view('partners');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function documents()
    {
        return view('docs');
    }
    public function documentII()
    {
        return view('docs2');
    }

    public function news()
    {
        return view('news');
    }

    public function faq()
    {
        return view('faq');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function calculation()
    {
        return view('calculator');
    }

    public function loto()
    {
        return view('loto');
    }
}
