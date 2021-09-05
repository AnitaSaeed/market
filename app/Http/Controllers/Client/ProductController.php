<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;

class ProductController extends Controller
{
    public function list(){
        $products = Product::where('active', 1);

        return view('Client.homepage', compact('products'));
    }

    public function singleProduct($id){
        $product= \App\Models\Product::where('id',$id)->with('category')->first();
//        $categories= Category::where('product_id',$id);
//dd($product);
        $images= $product->images()->get();
//        dd($images);
        return view('Client.single-product',compact('product','images'));

    }
}
