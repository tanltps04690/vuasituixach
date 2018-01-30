<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cheatModel extends Model
{
    protected $table = 'cheatdata';
    public $timestamps = false;
    function addCheat($data,$fileName){
        $this->cheat_name=$data->cheat_name;
        $this->cheat_phone=$data->cheat_phone;
        $this->cheat_address=$data->cheat_address;
        $this->cheat_des=$data->cheat_des;
        $this->cheat_img = $fileName;
        $this->save();
        // $this->cheat_name=$data->cheat_name;
    }
    function search($request){
        return $this->where('cheat_phone',$request->key)->get();

    }
}
