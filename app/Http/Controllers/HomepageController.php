<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Barang;

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

    public function search($awb){
      $awb = strtoupper($awb);
      if (substr_count($awb, '-') == 2)
      {
        list($pengirim, $awb2, $penerima) = explode("-", $awb);
        return view('search', [
            'barang' => Barang::where('awb','=',$awb2)
                ->where('sender','=',$pengirim)
                ->where('receiver','=',$penerima)
                ->orderBy('created_at','asc')
                ->get()
        ]);
      }
      else
      {
        return view('search', [
          'barang' => NULL
        ]);
      };
    }
}
