<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;

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