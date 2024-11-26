<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    //
    public function sign_in(Request $request){
        $user = Validator::make($request->all(),[
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|regex:/^[A-Za-z0-9]$/'
        ], [
            'email.required'=>'Поле почта обязательное',
            'email.email'=>'Введите почту',
            'email.unique'=>'Поле почта должно быть уникакльным',
            'password.required'=>'Поле пароль обязательное',
            'password.min'=>'Минимальная длина пароля: 8',
            'password.regex'=>'Поле пароль должно содержать только символы латиницы и цифры'
        ]);

        if($user->fails()){
            return redirect()->back()
                         ->withErrors($user)
                         ->withInput();
        }
        else{
            return redirect()->back()
                         ->withErrors('Успешне прохождение валидации!')
                         ->withInput();
        }
    }
}
