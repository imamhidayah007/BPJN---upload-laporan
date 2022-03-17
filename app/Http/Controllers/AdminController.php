<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Redirect; //untuk redirect
use DB;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function Dashboard (){

        $data['web'] = array(
            'title' => 'Dashboard',
            'breadcumb' => 'Dashboard'
        );

        return view('KontenAdmin.Dashboard', $data);
    }

    public function LaporanMasuk (){

        $data['web'] = array(
            'title' => 'Laporan Masuk',
            'breadcumb' => 'Laporan Masuk'
        );

        return view('KontenAdmin.LaporanMasuk', $data);
    }


//    public function logout () {
//        Auth::logout();
//        return redirect()->route('login');
//    }

}
