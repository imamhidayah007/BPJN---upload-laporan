<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Redirect; //untuk redirect
use DB;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

   public function login (){
        return view('Login');
    }




//    public function logout () {
//        Auth::logout();
//        return redirect()->route('login');
//    }

}
