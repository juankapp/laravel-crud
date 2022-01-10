<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/criar', [UsuarioController::class, 'create']);
Route::post('/criar', [UsuarioController::class, 'criar']);
Route::get('/produto/{id}', [UsuarioController::class, 'editar']);
Route::get('/excluir/{id}', [UsuarioController::class, 'destroy']);
Route::post('/editar/{id}', [UsuarioController::class, 'edit']);
