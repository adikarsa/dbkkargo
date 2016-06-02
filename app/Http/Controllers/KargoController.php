<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KargoController extends Controller
{
    //
    public function dashboard(){
      return view('kargo.dashboard');
    }
}
