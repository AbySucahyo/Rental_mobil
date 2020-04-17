<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = "penyewa" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        'nama_penyewa', 'alamat_penyewa', 'telp', 'no_ktp',
    ];

    public $timestamps = false ;

}
