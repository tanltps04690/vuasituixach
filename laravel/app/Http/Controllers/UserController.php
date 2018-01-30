<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\checkUpdateInfo;
class UserController extends Controller
{
    //
    function allUser(){
        $users =  new User();
        
       $listusers['users'] = $users ->all();
        return View('adminpage/listuser',$listusers);
    }
  
    function updateInfo(checkUpdateInfo $request){
        $users =  new User();
        //var_dump($request->avatar);
        $fileName;
        if($request->hasFile('avatar')){
            $file = $request->avatar;
            $fileName = $file->getClientOriginalName();
            //print($fileName);die();
            $file->move('uploads/avatar',$fileName);
        }
        $users->updateUserInfo($request,$fileName);
        return View('adminpage/userprofile');
    }
}
