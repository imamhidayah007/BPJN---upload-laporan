<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Redirect; //untuk redirect
use DB;

use Illuminate\Http\Request;
use App\Models\User;

class PPKController extends Controller
{

   public function Dashboard (){

       $data['web'] = array(
           'title' => 'Dashboard',
           'breadcumb' => 'Dashboard'
       );

        return view('KontenPPK.Dashboard', $data);
    }


    public function UploadLaporan (){

        $data['web'] = array(
            'title' => 'Upload Laporan',
            'breadcumb' => 'Laporan / Upload Laporan'
        );

        return view('KontenPPK.UploadLaporan', $data);
    }

}
