<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                'amazing'=>'boolean|nullable',
                'offer'=>'boolean|nullable'

            ]);

             $product=Product::create($data);
             $id= $product->id;

             foreach ($request->file('images') as $img){


                 $path = $img->move('img');
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
        $images= Image::where('product_id',$id)->get();
        return view('Admin.product.update',compact('product','images'));
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
            'price'=>'required',
            'amazing'=>'boolean|nullable',
            'offer'=>'boolean|nullable'


        ]);

        $product->Update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'price'=>$data['price'],
            'amazing'=>isset($data['amazing'])? $data['amazing']:0,
            'offer'=>isset($data['offer'])? $data['offer']:0
//        'amazing'=>$data['amazing'],
//            'offer'=>$data['offer']
        ]);
//        dd($request->file('images'));
        if ($request->file('images')  != null){

            foreach ($request->file('images') as $img){


                $path = $img->move('img');
                Image::create([
                    'product_id'=>$id,
                    'image'=>$path
                ]);
            }
        }


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

    public function deleteImage($id){
        //ToDO : fix first image bug
//dd('hi');
        $image=Image::find($id);
        $product_id=$image->product_id;
        $image->delete();
       return redirect('/admin/products/'.$product_id.'/edit');

    }
}
