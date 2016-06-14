<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator;

class AdminController extends Controller
{
    //
    public function dashboard(){
      return view('admin.dashboard');
    }

    public function pegawai(){
      return view('admin.pegawai', [
          'users' => User::orderBy('created_at','asc')->get()
      ]);
    }

    public function newpegawai(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6',
          'role' => 'required',
      ]);

      if ($validator->fails()) {
          return redirect('admin/pegawai')
              ->withInput()
              ->withErrors($validator);
      }

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'role' => $request->role,
      ]);

      return redirect('admin/pegawai');
    }
}
