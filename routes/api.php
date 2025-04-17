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

// Handle OPTIONS requests for CORS preflight
Route::options('/{any}', function () {
    return response()->json([], 204)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');
})->where('any', '.*');

Route::middleware([\App\Http\Middleware\HandleCors::class])->group(function () {
    // Authentication routes
    Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

    // Authenticated routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    });

    // Resource routes
    Route::apiResource('berita', BeritaController::class);
    Route::apiResource('beritaF', BeritaFController::class);
    Route::apiResource('pengumuman', PengumumanController::class);
    Route::apiResource('pimpinan', PimpinanController::class);
    Route::apiResource('sambutan', SambutanController::class);
    Route::apiResource('sejarah', SejarahController::class);
    Route::apiResource('visimisi', VisimisiController::class);
    Route::apiResource('jurusan', JurusanController::class);
});
