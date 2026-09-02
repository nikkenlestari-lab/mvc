<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'nama_kereta',
        'asal',
        'tujuan',
        'jam_berangkat',
        'jam_tiba',
    ];
}
