<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;

use Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function authentication(loginRequest $request){
        $data=$request->only('email','password'); // akhane auth all time hash pass follow kore
        if(Auth::attempt($data)){
            return redirect()->intended('group');
        }else{
            return redirect()->route('login');
            //return "login action";
        }
        //return "login action";
        //return $data;

   }
   public function logout(){
       $logout = Auth::logout();
       //Session::flash('delete',"Delete Successful"); // no Need here
       return redirect()->intended('login');
   }
}

/*
       if($logout){ // if not working
        //Session::flash('delete',"Delete Successful");
        return redirect()->intended('login');
    }else{
        return redirect()->route('login');
        //return "not logout";
    }
*/