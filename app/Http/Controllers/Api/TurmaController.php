<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\TurmaModel;
use Illuminate\Http\Request;


class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return TurmaModel::create($request->all());
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurmaModel $turmaModel)
    {
        //
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
}
