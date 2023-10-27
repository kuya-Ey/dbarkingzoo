<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\GroomingServiceController;
use App\Http\Controllers\PetBoardingController;

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
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// routes for product Controller
Route::get('/products',[ProductController::class, 'index'])->middleware('verified');
Route::get('/product/{id}',[ProductController::class, 'show'])->middleware('verified');
Route::get('/product',[ProductController::class, 'create'])->middleware('verified');
Route::get('/product/{id}/edit',[ProductController::class, 'edit'])->middleware('verified');

Route::post('/product',[ProductController::class, 'store'])->middleware('verified');
Route::put('/product/{id}/edit',[ProductController::class, 'update'])->middleware('verified');
Route::delete('/product/{id}',[ProductController::class, 'destroy'])->middleware('verified');

// routes for consultation Controller
Route::get('/consultations',[ProductController::class, 'index'])->middleware('verified');
Route::get('/consultation/{id}',[ProductController::class, 'show'])->middleware('verified');
Route::get('/consultation',[ProductController::class, 'create'])->middleware('verified');
Route::get('/consultation/{id}/edit',[ProductController::class, 'edit'])->middleware('verified');

Route::post('/consultation',[ProductController::class, 'store'])->middleware('verified');
Route::put('/consultation/{id}/edit',[ProductController::class, 'update'])->middleware('verified');
Route::delete('/consultation/{id}',[ProductController::class, 'destroy'])->middleware('verified');

// routes for grooming_service Controller
Route::get('/grooming_services',[ProductController::class, 'index'])->middleware('verified');
Route::get('/grooming_service/{id}',[ProductController::class, 'show'])->middleware('verified');
Route::get('/grooming_service',[ProductController::class, 'create'])->middleware('verified');
Route::get('/grooming_service/{id}/edit',[ProductController::class, 'edit'])->middleware('verified');

Route::post('/grooming_service',[ProductController::class, 'store'])->middleware('verified');
Route::put('/grooming_service/{id}/edit',[ProductController::class, 'update'])->middleware('verified');
Route::delete('/grooming_service/{id}',[ProductController::class, 'destroy'])->middleware('verified');

// routes for pet_boarding Controller
Route::get('/pet_boardings',[ProductController::class, 'index'])->middleware('verified');
Route::get('/pet_boarding/{id}',[ProductController::class, 'show'])->middleware('verified');
Route::get('/pet_boarding',[ProductController::class, 'create'])->middleware('verified');
Route::get('/pet_boarding/{id}/edit',[ProductController::class, 'edit'])->middleware('verified');

Route::post('/pet_boarding',[ProductController::class, 'store'])->middleware('verified');
Route::put('/pet_boarding/{id}/edit',[ProductController::class, 'update'])->middleware('verified');
Route::delete('/pet_boarding/{id}',[ProductController::class, 'destroy'])->middleware('verified');

