<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $amazingProducts = Product::where([['active', 1],['amazing',1]])->get();
        $newProducts=Product::orderBy('created_at','DESC')->get();
        $offerProducts=Product::where([['active', 1],['offer',1]])->get();
        return view('Client.homepage', compact('amazingProducts','newProducts','offerProducts'));
    }
}
