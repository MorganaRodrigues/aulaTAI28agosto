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

Route::get('/aluno', 'AlunoController@index');
Route::get('/aluno/edit/{id}', 'AlunoController@edit'); //chama o formulario
Route::post('/aluno/update/', 'AlunoController@update'); //
Route::get('/aluno/create', 'AlunoController@create'); //carrega o formulário
Route::post('/aluno/store', 'AlunoController@store'); //salvar os dados do formulário


/*
Route::get("/alunos_", "AlunoController@listar");

Route::get("/clientes", function(){
    return view("clientes");
});
Route::get("/clientes", "ClienteController@listar");

Route::get("/produtos", function(){
    return view("produtos");
});
Route::get("/produtos", "ProdutoController@listar");
/*
