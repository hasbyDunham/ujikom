<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
    Route::resource('beritaF', BeritaFController::class);
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

Route::get('/show', function () {
    return view('show');
});

Route::get('berita/{id}', 'App\Http\Controllers\BeritaController@getBeritaById');
// Route::get('berita{id}', [BeritaController::class, 'getBeritaById']);

Route::get('detail', function () {
    return view('detail');
});

Route::get('pengumuman/{id}', 'App\Http\Controllers\PengumumanController@getPengumumanById');
// Route::get('berita{id}', [BeritaController::class, 'getBeritaById']);

Route::get('detailP', function () {
    return view('detailP');
});

Route::get('/beritaF', function () {
    return view('beritaF');
});

Route::get('beritaF/{id}', 'App\Http\Controllers\BeritaFController@getBeritaFById');
// Route::get('berita{id}', [BeritaController::class, 'getBeritaById']);

Route::get('/detailF', function () {
    return view('detailF');
});
