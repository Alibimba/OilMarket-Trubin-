<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'login.required' => 'Обязательно для заполнения!!!',
            'login' => 'Неверный логин',
            'password.confirmed' => 'Пароль неверный',
            'password.required' => 'Обязательно для заполения!!!',
        ];
    }

}

