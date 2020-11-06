@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulário turma') }}</div>

                <div class="card-body">
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{action('TurmaController@store')}}" method="post">
                        <div class="form-row">
                            @csrf
                            <div class="col">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" /> <br>

                            </div>

                            <div class="col">

                                <label>Sigla</label>
                                <input type="text" name="sigla" class="form-control" /> <br>
                            </div>
                            <div class="col">

                                <label>Curso ID</label>
                                <select class="form-control" name="curso_id">
                                    @foreach($cursos as $item)
                                    <option value="{{$item->id}}">{{$item->nome}}</option>
                                    @endforeach
                                </select> <br>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-save"> </i>
                                    Salvar</button>
                                <a href="{{url('turma')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"> </i>
                                    Voltar</a>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
