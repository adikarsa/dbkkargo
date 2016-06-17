<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barang';

    public function awb()
    {
      return $this->belongsTo('App\AWB','awb','awb');
    }
}
