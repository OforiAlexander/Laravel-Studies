<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

   
       $attributes= request()->validate([
         'name'=>'required|max:255',
         'email'=>'required|email|max:255|unique:users,email',
         'username'=>'required|max:255|min:3|unique:users,username',
         'password'=>['required' , 'min:7', 'max:255']
        ]);

       $user = User::create($attributes);

        auth()->login($user);
        return redirect('/')->with('success', 'Your Account Has Been Created');
    }
}
