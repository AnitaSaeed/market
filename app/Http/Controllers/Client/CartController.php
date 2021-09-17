<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use mysql_xdevapi\Exception;

class CartController extends Controller
{

    public function index(){
        $cart = session('cart');
        if($cart == null){
            $cart = [];
        }

        return view('Client.cart',compact('cart'));


    }

    public function addToCart($id){
        $cart=session('cart');
       $cart[]=$id;
       session(['cart'=>$cart]);
       return redirect()->back();


    }

    public function createOrder(Request $request){
        $carts = session('cart');
        $price=0;
        foreach ($carts as $cart){
            $product= \App\Models\Product::where('id',$cart)->first();

            $price+=$product->price;

        }
        try {

            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'tracking_code'=>random_int(100000,999999),
                'price'=>$price,



            ]);
        }catch (Exception $exception){
            dd($exception->getMessage());
        }

        foreach ($carts as $cart){
            $price=Product::find($cart)->price;
            OrderProduct::create([
                'order_id'=>$order->id,
                'product_id'=>$cart,
                'price'=>$price
            ]);
        }
        session(['cart'=>[]]);
        return Redirect::to('/dashboard')->withSuccess('شفارش شما با موفقیت ثبت شد. منتظر تایید ادمین باشید.');

    }

}
