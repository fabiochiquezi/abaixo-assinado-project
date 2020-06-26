<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard/abaixo-assinado', "System\AbaixoAssinado@pageEdit")
    ->name('system.abaixoAssinado');

Route::get('/dashboard', "System\TabelaDeDados@index")
    ->name('system.home');

Route::get('/dashboard/sign-in', "System\Login@sigIn")
    ->name('system.signin');
