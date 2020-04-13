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

//Geral
Route::get('/', 'AppController@estados');

//Cliente
Route::post('cadastrado', 'ClienteController@addCliente')->name('cliente_add');

Route::get('listar/clientes', 'ClienteController@listarCliete')->name('list_cliente');