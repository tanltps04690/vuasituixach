<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CheckRegister;

class RegisterController extends Controller
{
    //
    function addNewMember(CheckRegister $request){
        $user = new User();
       return $user->register($request);
    }
}
