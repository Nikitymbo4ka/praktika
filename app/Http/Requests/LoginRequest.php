<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function rules(){
        return[
            'username' => 'required|max:100',
            'password' => 'required|min:6',
        ];
    }
    public function messages(){
        return[
            'username.required' => 'Это поле обязательно к заполнению!',
            'username.max' => 'Вы превысыли лимит символов',
            'password.required' => 'Это поле обязательно к заполнению!',
            'password.min' => 'Минимальное количество символов 6',
        ];
    }
}
