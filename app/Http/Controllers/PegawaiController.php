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
    public function info(){
      return view('pegawai.dashboard', [
          'barang' => Barang::/*whereDate('created_at','>',(date('Y-m-d', strtotime('-5 days'))))
              ->*/orderBy('created_at','asc')
              ->get()
      ]);
    }

    public function editinfo(Request $request){
      $barang = Barang::findOrFail($request->e_id);

      $validator = Validator::make($request->all(), [
          'e_name' => 'required|max:255',
          'e_commodity' => 'required|max:255',
          'e_total' => 'required',
          'e_weight' => 'required',
          'e_sender' => 'required|max:255',
          'e_receiver' => 'required|max:255',
          'e_origin' => 'required|max:255',
          'e_destination' => 'required|max:255',
          'e_note' => 'max:255',
      ]);

      if ($validator->fails()) {
          return redirect('/pegawai/dashboard')
              ->withInput()
              ->withErrors($validator);
      }

      $barang->name = $request->e_name;
      $barang->commodity = $request->e_commodity;
      $barang->total = $request->e_total;
      $barang->weight = $request->e_weight;
      $barang->sender = $request->e_sender;
      $barang->receiver = $request->e_receiver;
      $barang->origin = $request->e_origin;
      $barang->destination = $request->e_destination;
      $barang->note = $request->e_note;
      $barang->save();

      return redirect('/pegawai/dashboard');
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
          'note' => 'max:255',
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

    public function editbarang(Request $request){
      $barang = Barang::findOrFail($request->e_id);

      $validator = Validator::make($request->all(), [
          'e_name' => 'required|max:255',
          'e_commodity' => 'required|max:255',
          'e_total' => 'required',
          'e_weight' => 'required',
          'e_sender' => 'required|max:255',
          'e_receiver' => 'required|max:255',
          'e_origin' => 'required|max:255',
          'e_destination' => 'required|max:255',
          'e_note' => 'max:255',
      ]);

      if ($validator->fails()) {
          return redirect('/pegawai/dashboard')
              ->withInput()
              ->withErrors($validator);
      }

      $barang->name = $request->e_name;
      $barang->commodity = $request->e_commodity;
      $barang->total = $request->e_total;
      $barang->weight = $request->e_weight;
      $barang->sender = $request->e_sender;
      $barang->receiver = $request->e_receiver;
      $barang->origin = $request->e_origin;
      $barang->destination = $request->e_destination;
      $barang->note = $request->e_note;
      $barang->save();

      return redirect('/pegawai/barang');
    }

    public function dltbarang($id){
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
        'flight1' => 'required',
        'flight2',
        'flight3',
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
