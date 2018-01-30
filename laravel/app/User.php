<?php

namespace App;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function register($request){
                    $this->name = $request->input('name');
                    $this->email = $request->input('email');
                    $this->username = $request->input('username');
                    $this->phone = $request->input('phone');
                    $this->password = bcrypt($request->input('password'));
                    $this->role = 0;
                    $this->address = $request->input('address');
                    $this->save();
                    return View('mainpage/flatlogin');       
    }


    public function updateUserInfo($request,$avatar){
        $this->find(Auth::user()->id);
       
        $this->where('id',Auth::user()->id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'password'=>bcrypt($request->input('password')),
            'role'=>$request->input('role'),
            'gender'=>$request->input('gender'),
            'avatar'=>$avatar,
            'address'=>$request->input('address')
        ]);
    }
}
