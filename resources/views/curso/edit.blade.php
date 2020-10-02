@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulário cursos') }}</div>

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
                    <form action="{{action('CursoController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$curso->id}}" />
                        <div class="form-row">
                            <div class="col">
                                <label>Nome</label>
            <input type="text" name="nome" value="{{$curso->nome}}" /> <br>

                            </div>

                            <div class="col">

                                <label>Curso</label>
                                <input type="text" name="curso" value="{{$curso->abreviatura}}" /> <br>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-save"> </i>
                                    Salvar</button>
                                <a href="{{url('curso')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"> </i>
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

