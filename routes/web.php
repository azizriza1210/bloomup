<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebCamController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\DeteksiPenyakitController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('artikel', [HomeController::class, 'artikel']);
Route::get('desease', [HomeController::class, 'desease']);
Route::get('recomended', [HomeController::class, 'recomended']);
Route::get('login', [AuthController::class, 'showLoginForm']);
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm']);
Route::get('webcam', [WebcamController::class, 'index']);
Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');
Route::get('/news', [ArtikelController::class, 'index']);
Route::get('/rekomendasi', [RekomendasiController::class, 'index']);
