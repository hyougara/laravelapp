<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login/index');
    }

    // public function signIn(Request $request){
    // $signIn = array(session()->put($request->email),
    //                 session()->put($request->password));
    // return view('/home/sign-in');
    // }

}
