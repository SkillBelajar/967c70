<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/adumum','administrasiumum@adumum') ;
Route::get('/laporan','administrasiumum@laporan') ;

Route::get('/keputusankepaladesa','administrasiumum@keputusankepaladesa') ;
Route::get('/inventaris','administrasiumum@inventaris') ;

Route::get('/aparatdesa','administrasiumum@aparatdesa') ;

Route::get('/tanahkasdesa','administrasiumum@tanahkasdesa') ;
Route::get('/agenda','administrasiumum@agenda') ;

Route::get('/ekspedisi','administrasiumum@ekspedisi') ;
Route::get('/lembarandesa','administrasiumum@lembarandesa') ;

Route::get('/mutasipenduduk','administrasi_penduduk@mutasipenduduk') ;
Route::get('/bukuinduk','administrasi_penduduk@bukuinduk') ;

Route::get('/penduduksementara','administrasi_penduduk@penduduksementara') ;
Route::get('/kartukeluarga','administrasi_penduduk@kartukeluarga') ;
