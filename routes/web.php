<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Controller;


Route::get('/', function () {
    return view('welcome');
});

route::resource('barang', BarangController::class);
