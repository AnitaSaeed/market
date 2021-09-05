<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('Admin.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.product.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data=$request->validate([
                'title'=>'required',
                'description'=>'required|min:3|max:1000',
                'price'=>'required',

            ]);
             $product=Product::create($data);
             $id= $product->id;
//                dd($request->file('images'));
             foreach ($request->file('images') as $img){

//                 $path=$img->move(base_path('\img'), $img->getClientOriginalName());
//                 dd($path);
                 $path = $img->move('img');
//                 $fixed_path = '/storage/'.$path;
                 Image::create([
                     'product_id'=>$id,
                     'image'=>$path
                 ]);
             }

//             Image::where('product_id',$id)->create($data['images']);


       return  redirect('/admin/products');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        return view('Admin.product.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $data=$request->validate([
            'title'=>'required',
            'description'=>'required|min:3|max:1000',
            'price'=>'required'

        ]);
        $product->Update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'price'=>$data['price']
        ]);

        return  redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('/admin/products');
    }
}
