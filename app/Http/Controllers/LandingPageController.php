<?php

namespace App\Http\Controllers;

use App\Shop;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$shops = Shop::where('featured', true)->take(8)->inRandomOrder()->get();

        return view('front.landing')/*->with('shops', $shops)*/;
    }
}
