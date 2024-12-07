<?php

use App\Http\Controllers\PengumumanController;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengumuman',[PengumumanController::class,'pengumuman']);
Route::post('/store',[PengumumanController::class,'store']);
Route::get('/delete/{id}',[PengumumanController::class,'delete']);
Route::get('/edit/{id}',[PengumumanController::class,'edit']);
Route::post('/update/{id}',[PengumumanController::class,'update']);
Route::get('/cetak',[PengumumanController::class,'cetak']);


