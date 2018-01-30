<?php

namespace App\Http\Controllers;
use App\Models\cheatModel;
use Illuminate\Http\Request;
use App\Http\Requests\checkAddBom;

class cheatController extends Controller
{
    //
    function add(checkAddBom $request){
        $cheat_Md= new cheatModel;
            $fileName;
                if($request->hasFile('avatar')){
                    $file = $request->avatar;
                    $fileName = $file->getClientOriginalName();
                    print($fileName);die();
                    $file->move('uploads/Boom',$fileName);
                }
            $cheat_Md->Addcheat($request,$fileName);
        return View('customer/searchcheat');
    }



    function searchCheat(Request $request){
        $search_Md = new cheatModel;
        $listCheat['data'] = $search_Md->search($request);
        return View('customer/searchcheat',$listCheat);
    }
    function listCheat(){
        $list_Md = new cheatModel;
        $listCheat['data'] = $list_Md->all();
        return View('customer/searchcheat',$listCheat);
    }
}
