<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    function login(Request $request){
        if(Auth::attempt(['username'=>$request->input('username'),'password'=>$request->input('password')],$request->remember)){
            return Redirect::to('/');
        }
        else{
            return View('mainpage/flatregistration');
        }
    }
    function logout(){
        
        Auth::logout();
        return Redirect::to('mainpage/flatlogin');
    }
}
