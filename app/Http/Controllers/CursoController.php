<?php

namespace App\Http\Controllers;

use App\CursoModel;
use Illuminate\Http\Request;
use stdClass;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!\session()->has('cursos')) {
            $objCurso1 = new stdClass();
            $objCurso1->id = 1;
            $objCurso1->nome = 'Técnico em Informática';
            $objCurso1->abreviatura = 'INFO01';

            $objCurso2 = new stdClass();
            $objCurso2->id = 1;
            $objCurso2->nome = 'Técnico em Alimentos';
            $objCurso2->abreviatura = 'ALI01';

            $vetorCurso = [$objCurso1, $objCurso2];

            \session(['cursos' => $vetorCurso]);
        }

        //$objCursos = CursoModel::orderBy('id')->get();

        $objCursos = session('cursos');

        return view('curso.list')->with('cursos', $objCursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objCurso = new stdClass();
        $objCurso->id = rand(1, 1000);
        $objCurso->nome = $request->nome;
        $objCurso->abreviatura = $request->abreviatura;

        $vetorCurso = \session('cursos');
        $vetorCurso[] = $objCurso;

        session(['cursos' => $vetorCurso]);

        return redirect()->action('CursoController@index')->with('sucess', 'Curso salvo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CursoModel  $cursoModel
     * @return \Illuminate\Http\Response
     */
    public function show(CursoModel $cursoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CursoModel  $cursoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CursoModel $cursoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CursoModel  $cursoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CursoModel $cursoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CursoModel  $cursoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursoModel $cursoModel)
    {
        //
    }
}
