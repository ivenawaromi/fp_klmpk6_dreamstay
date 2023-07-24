<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\BaliController;



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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/', [LoginController::class, 'authenticate']);

Route::resource('about', AboutController::class);
Route::resource('hotel', HotelController::class);
Route::resource('form', FormController::class);


