<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = 'status';

    protected $fillable = [
        'barang_offload', 'total_box_offload', 'weight_offload', 'note_offload', 'barang_departure', 'total_box_departure', 'weight_departure', 'note_departure', 'id_barang'
    ];
}
