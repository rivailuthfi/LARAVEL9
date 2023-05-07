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

//127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

//127.0.0.1:8000/ ==> siswa
Route::get('/siswa', function () {
    return "<h1>SAYA SISWA</h1>";
});

//127.0.0.1:8000/siswa/1
Route::get('/siswa/{id}', function ($id) {
    return "<h1>SAYA SISWA DENGAN ID $id</h1>";
});
