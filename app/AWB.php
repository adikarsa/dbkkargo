<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AWB extends Model
{
    //
    protected $table = 'awb';

    public function goods()
    {
      return $this->hasMany('App\Barang','awb','awb');
    }
}
