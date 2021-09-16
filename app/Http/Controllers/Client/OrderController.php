<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
            $user_id=\auth()->user()->id;
        $orders=Order::where('user_id',$user_id)->get();
        return view('Client.orders',compact('orders'));
    }
    public function showDetail($id){
       $product_id= OrderProduct::where('order_id',$id)->pluck('product_id');
       foreach ($product_id as $item){

           $products[]=Product::find($item);
       }
//       dd($products);
        return view('Client.detail',compact('products'));
    }
}
