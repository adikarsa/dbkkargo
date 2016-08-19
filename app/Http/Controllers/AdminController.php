<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Barang;
use Validator;

class AdminController extends Controller
{
    //
    public function dashboard(){
      return view('admin.dashboard', [
          'barang' => Barang::orderBy('created_at','asc')
              ->get()
      ]);
    }

    public function pegawai(){
      return view('admin.pegawai', [
          'users' => User::orderBy('created_at','asc')
                ->get()
      ]);
    }

    public function newpegawai(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6',
          'role' => 'required',
          'contact' => 'required|min:10|max:12',
      ]);

      if ($validator->fails()) {
          return redirect('/admin/pegawai')
              ->withInput()
              ->withErrors($validator);
      }

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'role' => $request->role,
          'contact' => $request->contact,
      ]);

      return redirect('/admin/pegawai');
    }

    public function dltpegawai($id){
      User::findOrFail($id)->delete();
      return redirect('/admin/pegawai');
    }
}
