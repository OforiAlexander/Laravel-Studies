<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store(){
      $attributes =  request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){

            return redirect('/')-> with('success', 'Welcome Back ');
        };
        throw ValidationException::withMessages([
            'email'=> 'Invalid email address provided. Please try again.'
        ]);

        // return back()
        // ->withInput()
        // ->withErrors([
        //     'email'=> 'Your Email Could Not Be Verified'
        // ]);
    }

    public function destory()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You Are Logged Out Of Your Account');
    }
}
