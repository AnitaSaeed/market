<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('Admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.category.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->image);
        $data=$request->validate([
            'title'=>'required',
            'active'=>'boolean|nullable',
            'image'=>'nullable'

        ]);
        if (!empty($request->file())){
            $image=$request->file('image')->move('img');
            $data['image']=$image;
        }
        if ($data['active']==null){
            $data['active']=1;
        }
        Category::create($data);
        return  redirect('/admin/categories');
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
        $category=Category::find($id);
       return view('Admin.category.edit',compact('category'));
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
        $data=$request->validate([
            'title'=>'required|string',
            'active'=>'nullable',
            'image'=>'nullable'
        ]);
        if (!empty($request->file())){
            $image=$request->file('image')->move('img');
            $data['image']=$image;
        }
//        $category=Category::find($id);

        Category::find($id)->Update($data);
        return Redirect::to('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        if ($category->active==1){
            $category->update(['active'=>0]);
        }
        else{
            $category->update(['active'=>1]);
        }

        return redirect()->back();

    }
}
