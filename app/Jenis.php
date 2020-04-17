<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis_mobil" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'nama_jenis',
    ];

    public $timestamps = false ;
}
