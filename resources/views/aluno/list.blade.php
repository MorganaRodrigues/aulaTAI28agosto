<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/aluno/create')}}">Cadastrar</a>

    <h3>Listagem de alunos</h3>

    <table>
        <tbody>

            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Curso</td>
                <td>Turma</td>
            </tr>
        </tbody>
        @foreach($alunos as $dados)
        <tr>

            <td>{{$dados->id}}</td>
            <td>{{$dados->nome}}</td>
            <td>{{$dados->curso}}</td>
            <td>{{$dados->turma}}</td>
        <td><a href="{{action('AlunoController@edit', $dados->id)}}">Editar</a></td>

        </tr>
        @endforeach
    </table>
</body>

</body>

</html>
