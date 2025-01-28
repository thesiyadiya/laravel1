<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('user',[UserController::class,'getUser']);
//Route::get('about',[UserController::class,'aboutUser']);
//Route::get('user/{name}',[UserController::class,'getUserName']);
//Route::get('admin-login',[UserController::class,'adminLogin']);

//Route::redirect('/home','/');

//Route::view('/home','home');
//Route::view('/about','about');
//Route::view('/admin','admin.login');

//Route::get('/home', function () {
//    return view('home');
//});




//Route::view('/home','welcome');

//Route::get('/about/{name}',function($name){
//    echo $name;
//    return view('about');
//});
//Route::get('/about/{name}',function($name){
//    return view('about',['name'=>$name]);
//});

//Route::get('user-home1',[UserController::class,'userHome']);
//Route::get('user-about/{name}',[UserController::class,'userAbout']);
//Route::get('user-about',[UserController::class,'userAbout']);

Route::view('user-form','user-form');
Route::post('adduser',[UserController::class,'addUser']);

//Route::view('user-formhandling','user-formhandling');
//Route::post('adduser',[UserController::class,'addUser']);