<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', 'App\Http\Controllers\MahasiswaController@index');

// Pilih salah satu dari ini:
Route::get('/mahasiswa', [MahasiswaController::class,'index']);
// ATAU
// Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@tampil');

Route::match(['get', 'post'], '/insert', [MahasiswaController::class, 'insert']);

Route::match(['get', 'post'], '/mahasiswa/update/{nim}', [MahasiswaController::class, 'update']);

Route::match(['get', 'post'], '/mahasiswa/delete/{nim}', [MahasiswaController::class, 'delete']);
