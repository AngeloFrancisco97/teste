<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('projeto', 'App\Http\Controllers\ProjetoController');
Route::apiResource('projeto_imagem', 'App\Http\Controllers\ImagensProjetoController');
Route::apiResource('user', 'App\Http\Controllers\UserController');
Route::apiResource('informacao', 'App\Http\Controllers\InformacaoController');
Route::apiResource('habilidade', 'App\Http\Controllers\HabilidadeController');
Route::apiResource('conhecimento', 'App\Http\Controllers\ConhecimentoController');

Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout');
Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
Route::post('me', 'App\Http\Controllers\AuthController@me');

Route::get('novo-contato', 'App\Http\Controllers\Contato@novoContato');
