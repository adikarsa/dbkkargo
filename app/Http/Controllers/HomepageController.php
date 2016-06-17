<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class HomepageController extends Controller
{
    //
    public function index(){
      if (Auth::check()){
        $user = Auth::user();
        if ($user->role === 'admin') {
          return redirect()->intended('/admin/dashboard');
        } elseif ($user->role === 'pegawai') {
          return redirect()->intended('/pegawai/dashboard');
        }
      }
      return view('homepage.homepage');
    }

    public function services(){
      return view('homepage.services');
    }

    public function about(){
      return view('homepage.about');
    }

    public function contact(){
      return view('homepage.contact');
    }
}
