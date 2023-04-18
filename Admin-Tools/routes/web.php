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
/*
Route::get('/', function () {
    return view('welcome');
});*/

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
    Route::get('/', 'index')->middleware('admin');
});

Route::controller(PagesController::class)->group(function (){
    Route::get('/npc', 'npc_view')->middleware('admin');
    Route::get('/test', 'test');
    Route::get('/npc/edit/{id}', 'npc_edit')->middleware('admin');
    Route::post('/npc/update/{id}', 'npc_update')->middleware('admin')->name('npc.edit');
    Route::get('/npc/create', 'npc_create')->middleware('admin');
    Route::post('/npc/store', 'npc_store')->middleware('admin')->name('npc.store');
    Route::get('/npc/delete/{id}', 'npc_delete')->middleware('admin');
    Route::get('/mob', 'mob_view')->middleware('admin');
    Route::get('/mob/edit/{id}', 'mob_edit')->middleware('admin');
    Route::post('/mob/update/{id}', 'mob_update')->middleware('admin')->name('mob.edit');
    Route::get('/mob/create', 'mob_create')->middleware('admin');
    Route::post('/mob/store', 'mob_store')->middleware('admin')->name('mob.store');
    Route::get('/mob/delete/{id}', 'mob_delete')->middleware('admin');
    Route::get('/pos', 'npcpos_view')->middleware('admin');
    Route::get('/pos/create', 'npcpos_create')->middleware('admin');
    Route::post('/pos/store', 'npcpos_store')->middleware('admin')->name('pos.store');
    Route::get('/pos/edit/{id}', 'npcpos_edit')->middleware('admin');
    Route::Post('/pos/update/{id}', 'npcpos_update')->middleware('admin')->name('pos.edit');
    Route::get('/pos/delete/{id}', 'npcpos_delete')->middleware('admin');
});
