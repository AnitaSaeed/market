<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users= User::where('type','user')->get();
        return view('Admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Admin.user.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//dd($request->toArray());
            $data=$request->validate([
                'name'=>'required|string|alpha',
                'email'=>'required|unique:users,email',
                'firstname'=>'nullable|string|alpha',
                'lastname'=>'nullable|string|alpha',
                'mobile'=>'nullable|regex:/(09)[0-9]{9}/',
                'gender'=>'nullable'
            ]);
            $password=random_int(10000000,99999999);

            $data['password']=Hash::make($password);

            User::create($data);
            return redirect('/admin/users');

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
        $user=User::find($id);
        return view('Admin.user.update',compact('user'));

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
        $user=User::find($id);
        $data=$request->validate([
            'name'=>'required|string|alpha',
            'email'=>'required|email',
            'firstname'=>'nullable|string|alpha',
            'lastname'=>'nullable|string|alpha',
            'mobile'=>'nullable|regex:/(09)[0-9]{9}/',
            'gender'=>'nullable'
        ]);
        $user->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'mobile'=>$data['mobile'],
            'gender'=>$data['gender']
        ]);
        return  redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/admin/users');
    }
}
