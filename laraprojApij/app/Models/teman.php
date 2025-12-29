<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teman extends Model
{
    protected $table = "temans";
    protected $fillable = [
        'nama', 'alamat', 'kota', 'telp'
    ];
}
