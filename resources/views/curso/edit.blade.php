<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{action('AlunoController@update')}}" method="post">
        @csrf
    <input type="hidden" name="id" value="{{$aluno->id}}"/>
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        <label>Nome</label>
        <input type="text" name="nome" value="{{$aluno->nome}}" /> <br>

        <label>Curso</label>
        <input type="text" name="curso" value="{{$aluno->curso}}"/> <br>

        <label>Turma</label>
        <input type="text" name="turma" value="{{$aluno->turma}}"/> <br>

        <button type="submit">Atualizar</button>
    <a href="{{url('aluno')}}">Voltar</a>
    </form>
</body>

</html>
