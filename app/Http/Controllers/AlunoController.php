<?php
//p criar um controller php artisan make:controller nome
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunoModel;

class AlunoController extends Controller
{
    public function index()
    {
        $objAluno = AlunoModel::orderBy("id")->get();
        return view("aluno.list")->with('alunos', $objAluno);
    }

    public function create()
    {
        return view("aluno.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);
        $objAluno = new AlunoModel();
        $objAluno->nome = $request->nome;
        $objAluno->curso = $request->curso;

        $objAluno->turma = $request->turma;
        $objAluno->save();
        return \redirect()->action('AlunoController@index')->with('sucess', "Aluno salvo com sucesso!");
    }
    public function edit($id)
    {
        $objAluno = AlunoModel::findorfail($id);
        return view('aluno.edit')->with('aluno', $objAluno);
    }
    public function update(Request $request){
        $request->validate([
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);
        $objAluno = AlunoModel::findorfail($request->id);
        $objAluno->nome = $request->nome;
        $objAluno->curso = $request->curso;


        $objAluno->turma = $request->turma;
        $objAluno->save();
        return \redirect()->action('AlunoController@index')->with('sucess', "Aluno editado com sucesso!");

    }
}
