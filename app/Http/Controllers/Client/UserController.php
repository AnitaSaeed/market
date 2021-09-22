<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $id=auth()->user()->id;
        $user=User::find($id);
        return view('Client.index',compact('user'));
    }
    public function edit(){
        $id=auth()->user()->id;
        $user=User::find($id);
        return view('Client.edit',compact('user'));

    }
    public function update(Request $request, $id){
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
        return  redirect('/dashboard/user');

    }
}
