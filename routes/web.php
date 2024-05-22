<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/fasilitas.html', function () {
    return response()->file(public_path('fasilitas.html'));
});

Route::get('/desa.html', function () {
    return response()->file(public_path('desa.html'));
});

Route::get('/kecamatan.html', function () {
    return response()->file(public_path('kecamatan.html'));
});

Route::get('/', function () {
    return view('welcome');
});
