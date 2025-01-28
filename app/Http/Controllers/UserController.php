<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
 //   function getUser(){
      //  //return "Thesiya Diya";
   //     return view ('user');
   // }

//    function aboutUser(){
  //      return "Gunvantbhai";
    //}

    //function getUserName($name){
      // // echo "Hello this is ".$name;
        //return view('getuser',['name'=>$name]);
    //}
     
   // function adminLogin(){
   //     if(view::exists('admin.login')){
    ///   return view('admin.login');
     //   }else{
       //     echo "No view found";
     //   }

        //if(view::exists('admin.sign')){
          //  return view('admin.sign');
            // }else{
              //   echo "No view found";
             //}
    

   // function userHome(){
       // $name="diya";
     //   $users=['diya','thesiya','gunvatntbhai'];
       // return view('home',["name"=>$name,"users"=>$users]);
   // }
    //function userAbout($name){
      //  return view('about',['user'=>$name]);
    //}

    //function userHome(){
      //return view('home1');
    //}
    //function userabout(){
      //return view('about');
    //}

   // function addUser(Request $request){
     // //return $request;
      //echo "User name is $request->username <br>";
      //echo "User city is $request->city <br>";
      //echo "User email is $request->email<br>";
    //}
    
    //function addUser(){
      //return "hello";
    //}
     //function addUser(Request $request){
     // return $request;
     //echo "user city is =$request->city<br>";
     //echo "user age is = $request->age <br>";
     //echo "user gender is = $request->gender<br>";
     //multiple valuse print krva mate print_r
     //print_r($request->skill);
   // }
   function addUser(Request $request){
     $request->validate([
      'username'=>'required |min:3 | max:10',
      'email'=>'required | email',
      'city'=>'required | max:20 | Uppercase',
     ],[
      //custom message 
      'username.required'=>'username can not be empty',
      'username.min'=>'username min charcters should be 3',
      'username.max'=>'username max characters limit is 15',
      'email.email'=>'this email is not valid',
      'city.uppercase'=>'city should be in uppercase only',
     ]);
     return $request;
   }

}


