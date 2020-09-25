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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get("/alunos", function(){
    return view("alunos");
});
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function() {
    Route::get('/aluno', 'AlunoController@index');
    Route::get('/aluno/edit/{id}', 'AlunoController@edit'); //chama o formulario
    Route::get('/aluno/remove/{id}', 'AlunoController@remove');
    Route::post('/aluno/search/', 'AlunoController@search');
    Route::post('/aluno/update/', 'AlunoController@update');
    Route::get('/aluno/create', 'AlunoController@create'); //carrega o formulário
    Route::post('/aluno/store', 'AlunoController@store'); //salvar os dados do formulário

    Route::get('/curso', 'CursoController@index');
    Route::get('/curso/create', 'CursoController@create'); //carrega o formulário
    Route::post('/curso/store', 'CursoController@store'); //salvar os dados do formulário
});

