<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;

class ProductController extends Controller
{
    public function list(){
        $products = Product::where('active', 1);

        return view('Client.homepage', compact('products'));
    }
}
