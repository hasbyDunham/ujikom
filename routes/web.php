<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/sambutandekan', [FrontController::class, 'sambutanIndex'])->name('sambutandekan');
Route::get('berita/{slug}', [FrontController::class, 'beritaShow'])->name('berita.show');
Route::get('pengumuman/{slug}', [FrontController::class, 'pengumumanShow'])->name('pengumuman.show');
Route::get('beritaF/{slug}', [FrontController::class, 'beritaFShow'])->name('beritaF.show');
Route::get('jurusan/{slug}', [FrontController::class, 'jurusanFShow'])->name('detailjurusanF.show');


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
    Route::resource('pimpinan', PimpinanController::class);
    Route::resource('sambutan', SambutanController::class);
    Route::resource('visimisi', VisimisiController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('jurusan', JurusanController::class);
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

// Route::get('berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// Route::get('/sambutandekan', function () {
//     return view('sambutandekan');
// });
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

Route::get('/aqidah', function () {
    return view('jurusanF.aqidah');
});
Route::get('/studiagama', function () {
    return view('jurusanF.agama');
});
Route::get('/ilmualquran', function () {
    return view('jurusanF.ilmu');
});
Route::get('/tasawuf', function () {
    return view('jurusanF.tasawuf');
});
Route::get('/ilmuhadist', function () {
    return view('jurusanF.ilmuhadist');
});
