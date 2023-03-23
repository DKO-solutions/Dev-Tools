<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('/pin', 'pin');
    Route::post('/pin', 'pinLogin');
    Route::get('/login', 'index');
    Route::post('/login', 'Login')->name('login.custom');
    Route::get('/registration', 'Signup');
    Route::post('/registration', 'Registration')->name('register.custom');
    Route::get('/logout', 'Signout');
});

Route::controller(HomeController::class)->group(function (){
    Route::get('/dashboard', 'index')->middleware('admin');
});
