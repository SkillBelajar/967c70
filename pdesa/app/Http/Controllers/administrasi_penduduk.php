<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;


class administrasi_penduduk extends Controller
{
    //
    public function bukuinduk () {
       // $penduduk = DB::select("SELECT * FROM `tweb_penduduk` ORDER BY `tweb_penduduk`.`nama` ASC") ;
       $config = DB::select("SELECT * FROM `config`") ;
       $nama_desa =$config[0]->nama_desa ;
       $kepdes = $config[0]->nama_kepala_desa ;
        $penduduk = DB::select("SELECT * FROM `tweb_penduduk` ORDER BY `tweb_penduduk`.`id_cluster` ASC") ;
        return view('bukuinduk',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'penduduk'=>$penduduk]) ;
    }

    public function mutasipenduduk () {

            $mutasi = DB::select("SELECT * FROM `log_penduduk` ORDER BY `log_penduduk`.`id` ASC") ;
          //  $mutasi = DB::select("SELECT * FROM `log_penduduk` WHERE `catatan` NOT LIKE 'NUll' ORDER BY `log_penduduk`.`id` ASC") ;

            $config = DB::select("SELECT * FROM `config`") ;
            $nama_desa =$config[0]->nama_desa ;
            $kepdes = $config[0]->nama_kepala_desa ;
        return view('mutasipenduduk',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'mutasi'=>$mutasi]) ;
    }

    public function penduduksementara() {
        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;
        #sementara
        $sementara =    DB::select("SELECT * FROM `tweb_penduduk` WHERE `status` = 2 ORDER BY `tweb_penduduk`.`id` ASC") ;

        return view('penduduksementara',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'sementara'=>$sementara]) ;
    }

    public function kartukeluarga() {

        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;

        $kk = DB::select("SELECT * FROM `keluarga_aktif` ORDER BY `keluarga_aktif`.`id` ASC
        ") ;
       //dd($kk) ;
        return view('kartukeluarga',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'kk'=>$kk])  ;
     }
}
