<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProduct;
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
        $categiries= Category::all();
        return view('Admin.product.store', compact('categiries'));
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
                'title'=>'required|string',
                'description'=>'required|min:3|max:1000',
                'price'=>'required|integer',
                'amazing'=>'boolean|nullable',
                'offer'=>'boolean|nullable',
                'categories'=>'exists:categories,id'

            ]);

        $product=Product::create($data);
             $id= $product->id;
             $categories=$data['categories'];
             if($data['categories']!=null){
                 foreach ($categories as $category){

                     CategoryProduct::create([
                         'product_id'=>$id,
                         'category_id' =>$category
                     ]);

                 }
             }

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
        $categories=Category::all();
        return view('Admin.product.update',compact('product','images','categories'));
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
            'offer'=>'boolean|nullable',
            'category_id'=>'nullable|exists:categories,id'


        ]);

        $product->Update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'price'=>$data['price'],
            'amazing'=>isset($data['amazing'])? $data['amazing']:0,
            'offer'=>isset($data['offer'])? $data['offer']:0
        ]);
        if ($data['category_id']!=null){

        }

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
