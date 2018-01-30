<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainpage/home');
});
Route::get('/login', function () {
    return view('mainpage/flatlogin');
});
Route::get('/register', function () {
    return view('mainpage/flatregistration');
});
Route::post('/register','RegisterController@addNewMember');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');




Route::post('/addcheat','cheatController@add');
Route::post('/searchcheat','cheatController@searchCheat');
// Route::get('/searcheat','cheatController@searchCheat');
Route::get('/searcheat','cheatController@listCheat');

Route::group(['middleware' => 'Login'],function () {
        Route::get('/infomation', function () {
            return view('adminpage/dashboard');
        });
        Route::get('/admin/dashboard', function () {
            return view('adminpage/dashboard');
        });
        Route::get('/admin', function () {
            return view('adminpage/dashboard');
        });
        Route::get('/admin/statis', function () {
            return view('adminpage/statistical');
        });
        Route::get('listuser','UserController@allUser');
        
        Route::get('user', function () {
            return view('adminpage/userprofile');
        });
        Route::get('deluser', function () {
            return view('adminpage/deluser');
        });
        Route::get('updateproduct', function () {
            return view('adminpage/updateproduct');
        });
        Route::get('listproduct', function () {
            return view('adminpage/listproduct');
        });
        Route::get('delproduct', function () {
            return view('adminpage/delproduct');
        });
        Route::get('addproduct', function () {
            return view('adminpage/addproduct');
        });
        Route::get('bom', function () {
            return view('customer/bom');
        });
        Route::post('updateinfo','UserController@updateInfo');
});