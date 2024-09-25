<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('welcome');
});

Auth::routes(
    ['register' => false]
);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('berita', BeritaController::class);
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/sambutandekan', function () {
    return view('sambutandekan');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/datadosen', function () {
    return view('datadosen');
});
Route::get('/pimpinan', function () {
    return view('pimpinan');
});
Route::get('/berita', function () {
    return view('berita');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});
