<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class administrasiumum extends Controller
{
    //

    public function laporan() {

        return view("laporan") ;
    }

    public function adumum () {
       $desa = DB::select("SELECT * FROM `dokumen` WHERE `kategori` = 3 ORDER BY `dokumen`.`id` ASC") ;

      $config = DB::select("SELECT * FROM `config`") ;
      $nama_desa =$config[0]->nama_desa ;
      $kepdes = $config[0]->nama_kepala_desa ;
        return view('adumum',['desa'=>$desa,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;
    }



    public function keputusankepaladesa () {
        $desa = DB::select("SELECT * FROM `dokumen` WHERE `kategori` = 2 ORDER BY `dokumen`.`id` ASC") ;

       $config = DB::select("SELECT * FROM `config`") ;
       $nama_desa =$config[0]->nama_desa ;
       $kepdes = $config[0]->nama_kepala_desa ;
         return view('keputusankepaladesa',['desa'=>$desa,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;
     }


    public function inventaris() {
        $inventaristanah = DB::select("SELECT DISTINCT nama_barang FROM `inventaris_gedung` ORDER BY `inventaris_gedung`.`nama_barang` ASC ") ;

        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;
        return view('inventaris',['inv'=>$inventaristanah,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;

    }

    public function aparatdesa() {

        $aparatdesa = DB::select("SELECT * FROM `tweb_desa_pamong` ORDER BY `tweb_desa_pamong`.`pamong_id` ASC") ;
        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;
        return view('aparatdesa',['aparatdesa'=>$aparatdesa,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;

    }


    public function tanahkasdesa () {

        $tanahkas = DB::select("SELECT * FROM `inventaris_tanah` WHERE `nama_barang` LIKE 'TANAH KAS DESA' ORDER BY `inventaris_tanah`.`id` ASC") ;
        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;

        return view('tanahkasdesa',['tanahkas'=>$tanahkas,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;
    }

    public function agenda () {

        //surat keluar
       $keluar =  DB::select("SELECT * FROM `surat_keluar` ORDER BY `surat_keluar`.`id` ASC");

       //surat masuk
       $masuk = DB::select("SELECT * FROM `surat_masuk` ORDER BY `surat_masuk`.`id` ASC") ;
       $config = DB::select("SELECT * FROM `config`") ;
       $nama_desa =$config[0]->nama_desa ;
       $kepdes = $config[0]->nama_kepala_desa ;

        return view('agenda',['keluar'=>$keluar,'masuk'=>$masuk,'nama_desa'=>$nama_desa,'kepdes'=>$kepdes]) ;
    }

    public function ekspedisi () {

        $config = DB::select("SELECT * FROM `config`") ;
       $nama_desa =$config[0]->nama_desa ;
       $kepdes = $config[0]->nama_kepala_desa ;

        $ek = DB::select("SELECT * FROM `surat_keluar` WHERE `ekspedisi` = 1 ORDER BY `surat_keluar`.`id` ASC") ;


        return view('ekspedisi',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'ek'=>$ek]) ;
    }

    public function lembarandesa () {
        $config = DB::select("SELECT * FROM `config`") ;
        $nama_desa =$config[0]->nama_desa ;
        $kepdes = $config[0]->nama_kepala_desa ;

        $desa = DB::select("SELECT * FROM `dokumen` WHERE `kategori` = 3 ORDER BY `dokumen`.`id` ASC " ) ;


        return view('lembarandesa',['nama_desa'=>$nama_desa,'kepdes'=>$kepdes,'desa'=>$desa]) ;
    }



}
