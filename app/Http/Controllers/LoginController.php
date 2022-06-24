<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    public function stat(){
        return view('statia');
    }
    public function submit(LoginRequest $request){
        $user = User::where($request->validated())->first();
        if($user){
            auth()->login($user);
            return redirect()->route('home');
        }else{
            return back()->withErrors([
               'password' => 'Не верный пароль'
            ]);
        }
    }
}
