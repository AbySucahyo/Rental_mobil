<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = "mobil" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'nama_mobil', 'id_jenis', 'plat_nomor', 'kondisi',
    ];

    public $timestamps = false ;
}
