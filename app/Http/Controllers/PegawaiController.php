<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PegawaiController extends Controller
{
    //
    public function dashboard(){
      return view('pegawai.dashboard');
    }

    public function barang(){
      return view('pegawai.barang');
    }

    public function awb(){
      return view('pegawai.awb');
    }

    public function status(){
      return view('pegawai.status');
    }
}
