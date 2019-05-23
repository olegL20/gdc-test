<?php

namespace App\Http\Controllers;

use App\LotteryWinner;
use App\Rate;
use Carbon\Carbon;
use DemeterChain\C;
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
        return view('home')->with('rates', Rate::all());
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

    public function documentCCCL()
    {
        return view('document_cccl');
    }

    public function documentCPI()
    {
        return view('document_cpi');
    }

    public function documentGBSRO()
    {
        return view('document_gbsro');
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
        $rates = Rate::where('title', '!=', 'Партнер')->get();
        return view('calculator', [
            'rates' => $rates,
        ]);
    }

    public function loto()
    {
        $winners = LotteryWinner::whereDate('time', Carbon::now())->get();

        return view('loto')
            ->with('winners', $winners ?? []);
    }
}
