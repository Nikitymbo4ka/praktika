<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function rules(){
        return[
            'name' => 'required',
            'username' => 'required|max:100',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ];
    }
    public function messages(){
        return[
            'name.required' => 'Это поле обязательно к заполнению!',
            'username.required' => 'Это поле обязательно к заполнению!',
            'username.max' => 'Вы превысыли лимит символов',
            'email.required' => 'Это поле обязательно к заполнению!',
            'password.required' => 'Это поле обязательно к заполнению!',
            'password.confirmed' => 'Повтор пароля не совпадает',
            'password.min' => 'Минимальное количество символов 6',
            'password_confirmation.required' => 'Это поле обязательно к заполнению!'
        ];
    }
}
