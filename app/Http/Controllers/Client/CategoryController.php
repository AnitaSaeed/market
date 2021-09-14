<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($id){
       $category= Category::find($id);
        $instance = DB::table('category_products')->where('category_id',$id)->pluck('product_id')->toArray();
        $products = Product::whereIn('id',$instance)->get();
        return view('Client.category',compact('category','products'));
    }
}
