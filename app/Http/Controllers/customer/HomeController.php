<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use App\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $latestProducts = Product::latest()->take(4)->get();
        return view('customer.home',compact('products','latestProducts',$products,$latestProducts));
    }
}
