<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $request){
        //dd($request["firstName"]);
        $firstName = $request["firstName"];
        $lastName = $request["lastName"];
        return view('welcome');
    }
    
    
    public function welcome_post(Request $request){
        //dd($request["firstName"]);
        $firstName = $request["firstName"];
        $lastName = $request["lastName"];
        return view('welcome', ["firstName" => $firstName, "lastName" => $lastName]);
    }
}
