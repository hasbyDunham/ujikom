<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\BeritaFController;
use App\Http\Controllers\Api\PengumumanController;
use App\Http\Controllers\Api\PimpinanController;
use App\Http\Controllers\Api\SambutanController;
use App\Http\Controllers\Api\SejarahController;
use App\Http\Controllers\Api\VisimisiController;
use App\Http\Controllers\Api\JurusanController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::resource('berita', BeritaController::class)->except(['edit', 'create']);
Route::resource('beritaF', BeritaFController::class)->except(['edit', 'create']);
Route::resource('pengumuman', PengumumanController::class)->except(['edit', 'create']);
Route::resource('pimpinan', PimpinanController::class)->except(['edit', 'create']);
Route::resource('sambutan', SambutanController::class)->except(['edit', 'create']);
Route::resource('sejarah', SejarahController::class)->except(['edit', 'create']);
Route::resource('visimisi', VisimisiController::class)->except(['edit', 'create']);
Route::resource('jurusan', JurusanController::class)->except(['edit', 'create']);
