<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

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

Route::controller(PagesController::class)->group(function (){
    Route::get('/knpc', 'kNPC_view')->middleware('admin');
    Route::get('/test', 'test')->middleware('admin');
    //Route::get('/knpc/edit', 'kNPC_edit')->middleware('admin');
    //Route::get('/knpc/delete', 'kNPC_delete')->middleware('admin');
});
