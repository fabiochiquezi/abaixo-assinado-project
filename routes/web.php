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

Route::get('/dashboard/abaixo-assinado', "AbaixoAssinado@pageEdit");

Route::get('/dashboard/tabela-de-dados', "TabelaDeDados@index");
