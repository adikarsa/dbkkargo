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
        } elseif ($user->role === 'kargo') {
          return redirect()->intended('/kargo/dashboard');
        } elseif ($user->role === 'dbk') {
          return redirect()->intended('/dbk/dashboard');
        }
      }
      return view('homepage.homepage');
    }
}
