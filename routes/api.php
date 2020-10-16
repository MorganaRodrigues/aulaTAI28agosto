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

Route::post('/turma/store', 'Api\TurmaController@store'); //salva os dados

Route::get('/turma', 'Api\TurmaController@index'); //carrega os dados do BD

Route::put('/turma/update/{id}', 'Api\TurmaController@update'); //atualiza os dados

Route::get('/turma/{id}', 'Api\TurmaController@show'); //carrega/mostra os dados do BD pelo id

Route::delete('/turma/{id}', 'Api\TurmaController@destroy'); //deleta os dados do BD pelo id

Route::post('/turma/search', 'Api\TurmaController@search'); //busca os dados

