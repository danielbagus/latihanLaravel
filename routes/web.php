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

Route::get('/', function () {
    return ('Selamat Datang');
});

Route::get('/about', function () {
    return ('NIM: 2241727042<br>Nama : Daniel Bagus Christyanto<br>Kelas : Web-A');
});

Route::get('/articles/{id}', function ($id) {
    return  'Halaman artikel ini dengan id ' . $id;
});
