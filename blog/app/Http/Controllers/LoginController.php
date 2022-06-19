<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function submit(LoginRequest $request){
        $user = User::where($request->validated())->first();
        if($user){
            Auth()->login($user);
        }

        return redirect()->home();
    }
}
