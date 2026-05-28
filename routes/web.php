<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/penduduk', [KelurahanController::class, 'dataPenduduk']);