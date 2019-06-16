<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class Maincontrollers extends Controller
{
    function index(){
        return view('login');
    }


    function main(Request $request){

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        );
        if (Auth::attempt($user_data)){
           return view('sussesfull');
        }else{
            return back()->with('error','Wrong Login Details');

        }

    }

}




