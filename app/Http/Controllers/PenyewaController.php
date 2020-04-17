<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyewa;
use Auth;
use Illuminate\Support\Facades\Validator;


class PenyewaController extends Controller
{
    public function show()
    {
        if(Auth::user()->level == 'admin'){
            $dt_penyewa=Penyewa::get();
            return Response()->json($dt_penyewa);
        }else{
            return Response()->json('Anda Bukan admin');
        }
    }

    public function store(Request $req){
        if(Auth::user()->level == 'admin'){
        
        $validator = Validator::make($req->all(),
        [
            'nama_penyewa'=>'required',
            'alamat_penyewa'=>'required',
            'telp'=>'required',
            'no_ktp'=>'required'
        ]
        );
        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = Penyewa::create([
            'nama_penyewa'=>$req->nama_penyewa,
            'alamat_penyewa'=>$req->alamat_penyewa,
            'telp'=>$req->telp,
            'no_ktp'=>$req->no_ktp
        ]);
        if($simpan){
            return Response()->json('Data Penyewa berhasil ditambahkan');
        }else{
            return Response()->json('Data Penyewa gagal ditambahkan');
        }
    }else{
        return Response()->json('Anda Bukan admin');
    }
    }

    public function update($id,Request $req){
        if(Auth::user()->level == 'admin'){

        $validator = Validator::make($req->all(),
        [
            'nama_penyewa'=>'required',
            'alamat_penyewa'=>'required',
            'telp'=>'required',
            'no_ktp'=>'required'
        ]
        );
        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $ubah = Penyewa::where('id', $id)->update([
            'nama_penyewa'=>$req->nama_penyewa,
            'alamat_penyewa'=>$req->alamat_penyewa,
            'telp'=>$req->telp,
            'no_ktp'=>$req->no_ktp
        ]);
        if($ubah){
            return Response()->json('Data Penyewa berhasil diubah');
        }else{
            return Response()->json('Data Penyewa gagal diubah');
        }
    }else{
        return Response()->json('Anda Bukan admin');
    }
    }

    public function destroy($id){
        if(Auth::user()->level == 'admin'){

        $hapus = Penyewa::where('id', $id)->delete();
        if($hapus){
            return Response()->json('Data Penyewa berhasil dihapus');
        }else{
            return Response()->json('Data Penyewa gagal dihapus');
        }
    }else{
        return Response()->json('Anda Bukan admin');
    }
    }
}
