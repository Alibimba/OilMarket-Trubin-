<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Поле пустое, заполните',
            'email.unique' => 'Пользователь с такой почтой уже существует',

            'password.required' => 'Пользователь с такой почтой уже существует',
            'password.confirmed' => 'Пользователь с такой почтой уже существует',
        ];
    }
}

