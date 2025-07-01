<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProdukController;
use App\Models\Matakuliah;
use App\Models\prodi;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return ('Halo guys, ini laravel pertamaku');
});
Route::get('/home', function () {
    return view('index');
});
//controller untuk mengatur sistem
//models untuk
Route::get('/belajar2/{a}/{b}', function ($a, $b) {
    return "isi parameter 1: $a , isi parameter 2: $b"; ;
});
Route::get('/mahasiswaa', function () {
    $data['mahasiswaa'] = ["Anto","Budi","Erni","Feri","Gani"];
    return view('mahasiswaa',$data);
});
Route::get('/biodata', [Biodatacontroller::class, 'index']);
Route::post('/biodata', [Biodatacontroller::class, 'proses']);
Route::get('/mahasiswa', [BiodataController::class, 'mahasiswa']);
Route::get('/matakuliah/create/{x}/{y}', function ($nama, $sks){
   matakuliah::create([
       'nama' => $nama,
       'sks' => $sks
   ]);
   return "Data berhasil disimpan";
});
Route::get('/matakuliah/lihat', function(){
    $matakuliah = Matakuliah::all();
    foreach ($matakuliah as $data){
        echo $data->id . " " . $data->nama . " " . $data->sks . "<br>";
    }
});
Route::get('/prodi/create/{x}', function ($nama){
   prodi::create([
       'nama' => $nama
   ]);
   return "Data berhasil disimpan";
});
Route::get('/prodi/lihat', function(){
    $prodi = prodi::all();
    foreach ($prodi as $data){
        echo $data->id . " " . $data->nama . "<br>";
    }
});
Route::resource('buku', BukuController::class);
Route::resource('mobil', MobilController::class);

Route::resource('/produk', ProdukController::class)->middleware('auth'); 
Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'autentikasi'])->name('login.autentikasi'); 
Route::get('/keluar', [LoginController::class, 'keluar'])->name('keluar'); 
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi'); 
Route::post('/registrasi', [LoginController::class, 'store'])->name('registrasi.store');