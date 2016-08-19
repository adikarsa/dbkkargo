<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;
use App\AWB;
use App\Status;
use Validator;
use Auth;

class PegawaiController extends Controller
{
    //
    public function dashboard(){
      return view('pegawai.dashboard', [
          'barang' => Barang::whereDate('created_at','>',(date('Y-m-d', strtotime('-5 days'))))
              ->orderBy('created_at','asc')
              ->get()
      ]);
    }

    public function barang(){
      return view('pegawai.barang', [
          'barang' => Barang::whereDate('created_at','>',(date('Y-m-d', strtotime('-3 days'))))
              ->where('awb','=',NULL)
              ->orderBy('created_at','asc')
              ->get()
      ]);
    }

    public function newbarang(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
          'commodity' => 'required|max:255',
          'total' => 'required',
          'weight' => 'required',
          'sender' => 'required|max:255',
          'receiver' => 'required|max:255',
          'origin' => 'required|max:255',
          'destination' => 'required|max:255',
          'note' => 'required|max:255',
      ]);

      if ($validator->fails()) {
          return redirect('pegawai/dashboard')
              ->withInput()
              ->withErrors($validator);
      }

      Barang::create([
        'name' => $request->name,
        'commodity' => $request->commodity,
        'total' => $request->total,
        'weight' => $request->weight,
        'sender' => strtoupper($request->sender),
        'receiver' => strtoupper($request->receiver),
        'origin' => $request->origin,
        'destination' => $request->destination,
        'note' => $request->note,
        'inputted_by' => Auth::user()->name,
      ]);

      return redirect('/pegawai/barang');
    }

    public function dltpegawai($id){
      Barang::findOrFail($id)->delete();
      return redirect('/pegawai/barang');
    }

    public function awb(){
      return view('pegawai.awb', [
          'barang' => Barang::whereDate('created_at','>',(date('Y-m-d', strtotime('-3 days'))))
              ->where('awb','=',NULL)
              ->orderBy('id','asc')
              ->get()
      ]);
    }

    public function setAWB(Request $request){
      $validator =  Validator::make($request->all(), [
        'awb' => 'required|unique:awb',
        'brg.*' => 'required',
      ]);

      if ($validator->fails()) {
          return redirect('pegawai/awb')
              ->withInput()
              ->withErrors($validator);
      }

      AWB::create([
        'awb' => strtoupper($request->awb),
      ]);

      foreach ($request->brg as $temp) {
        $barang = Barang::find($temp);
        $barang->awb = strtoupper($request->awb);
        $barang->save();
      }

      return redirect('/pegawai/awb');
    }

    public function status(){
      return view('pegawai.status');
    }

    public function setStatus(Request $request){
      return redirect('/pegawai/status');
    }
}
