<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;
use App\AWB;
use App\Status;

class PegawaiController extends Controller
{
    //
    public function dashboard(){
      return view('pegawai.dashboard');
    }



    public function barang(){
      return view('pegawai.barang', [
          'barang' => Barang::where('created_at', 'like', date('Y-m-d'))
                ->orderBy('created_at','asc')
                ->get()
      ]);
    }


    public function awb(){
      return view('pegawai.awb');
    }

    public function status(){
      return view('pegawai.status');
    }

    public function newbarang(Request $request){
      $table->string('name');
      $table->string('commodity');
      $table->integer('total');
      $table->double('weight', 15, 2 );
      $table->string('sender');
      $table->string('receiver');
      $table->string('origin');
      $table->string('destination');
      $table->string('note');
      $table->integer('inputted_by');
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
          'commodity' => 'required|max:255',
          'total' => 'required|min:6',
          'weight' => 'required',
          'sender' => 'required|max:255',
          'receiver' => 'required|max:255',
          'origin' => 'required|max:255',
          'destination' => 'required|max:255',
          'note' => 'required|max:255',
      ]);

      if ($validator->fails()) {
          return redirect('admin/pegawai')
              ->withInput()
              ->withErrors($validator);
      }

      Barang::create([
        'name' => $request->name,
        'commodity' => $request->commodity,
        'total' => $request->total,
        'weight' => $request->weight,
        'sender' => $request->sender,
        'receiver' => $request->receiver,
        'origin' => $request->origin,
        'destination' => $request->destination,
        'note' => $request->note,
        'inputted_by' => Auth::user()->name,
      ]);

      return redirect('/pegawai/barang');
    }

    public function setAWB(Request $request){
      return redirect('/pegawai/awb');
    }

    public function setStatus(Request $request){
      return redirect('/pegawai/status');
    }
}
