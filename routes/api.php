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

Route::post('/turma/store', 'Api\TurmaApiController@store'); //salva os dados

Route::get('/turma', 'Api\TurmaApiController@index'); //carrega os dados do BD

Route::put('/turma/update/{id}', 'Api\TurmaApiController@update'); //atualiza os dados

Route::get('/turma/{id}', 'Api\TurmaApiController@show'); //carrega/mostra os dados do BD pelo id

Route::delete('/turma/{id}', 'Api\TurmaApiController@destroy'); //deleta os dados do BD pelo id

Route::post('/turma/search', 'Api\TurmaApiController@search'); //busca os dados

