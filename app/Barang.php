<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barang';

    protected $fillable = [
        'name', 'commodity', 'total', 'weight', 'sender', 'receiver', 'origin', 'destination', 'note', 'inputted_by'
    ];

    public function awb()
    {
      return $this->belongsTo('App\AWB','awb','awb');
    }

    public function getStatus()
    {
      return $this->hasMany('App\Status','status_id');
    }
}
