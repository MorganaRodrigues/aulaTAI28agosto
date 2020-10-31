<?php

namespace App\Http\Controllers;

use App\TurmaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/turma');
        $objTurma = json_decode(json_encode($response->json()));
        return view('turma.list')->with('turmas', $objTurma);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("turma.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'sigla' => 'required|max:100',
            'curso_id' => 'required',
        ]);

        $objTurma = new TurmaModel();
        $objTurma->nome = $request->nome;
        $objTurma->sigla = $request->sigla;
        $objTurma->curso_id = $request->curso_id;

        //dd($objTurma);

        $objTurma->save();

        return \redirect()->action('TurmaController@index')->with('sucess', "Turma salva");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function show(TurmaModel $turmaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objTurma = TurmaModel::findorfail($id);
        return view('turma.edit')->with('turma', $objTurma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurmaModel $turmaModel)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'sigla' => 'required|max:100',
            'curso_id' => 'required',
        ]);

        $objTurma = TurmaModel::findorfail($request->id);
        $objTurma->nome = $request->nome;
        $objTurma->sigla = $request->sigla;
        $objTurma->curso_id = $request->curso_id;

        //dd($objAluno);

        $objTurma->save();

        return redirect()->action('TurmaController@index')->with('sucess', "Turma editada!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurmaModel $turmaModel)
    {
        //
    }

    public function remove($id)
    {
        $objTurma = TurmaModel::findOrFail($id);

        $objTurma->delete();

        return redirect()->action('TurmaController@index')->with('sucess', "Turma removida!");
    }

    public function search(Request $request)
    {

        if (!empty($request->nome)) {
            $objTurma = TurmaModel::where('nome', 'like', '%' . $request->nome . '%')->get();
        } else if (!empty($request->sigla)) {
            $objTurma = TurmaModel::where('sigla', 'like', '%' . $request->sigla . '%')->get();
        } else {
            $objTurma = TurmaModel::orderBy('id')->get();
        }

        return view('turma.list')->with('turmas', $objTurma);
    }

}
