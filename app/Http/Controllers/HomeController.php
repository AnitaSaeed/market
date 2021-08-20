<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $products = Product::where('active', 1)->get();
        return view('Client.homepage', compact('products'));
    }
}
