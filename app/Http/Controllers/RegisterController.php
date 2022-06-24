<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
   public function show(){
        return view('auth.register');
   }
    public function get(){
        return view('auth.login');
    }
    public function stat(){
        return view('statia');
    }
    public function submit(RegisterRequest $request){

       $user = User::create($request->validated());
       auth()->login($user);
       return redirect()->route('home');
    }
}
