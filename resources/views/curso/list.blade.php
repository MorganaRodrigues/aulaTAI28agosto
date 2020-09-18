<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/curso/create')}}">Cadastrar</a>
    <form action="{{--action('CursoController@search')--}}" method="POST">
        @csrf
        <label>nome</label>
        <input type="text" name="nome" />

        <button type="submit">Buscar</button>
    </form>
    <h3>Listagem de Cursos</h3>

    <table>
        <tbody>

            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Abreviatura</td>

            </tr>
        </tbody>

        @foreach($cursos as $dados)
        <tr>
            <td>{{$dados->id}}</td>
            <td>{{$dados->nome}}</td>
            <td>{{$dados->abreviatura}}</td>

            <td><a href="{{--action('AlunoController@edit', $dados->id)--}}">Editar</a></td>
            <td><a href="{{--action('AlunoController@remove', $dados->id)--}}"
                    onclick="return confirm('Tem certeza que deseja remover?')">Remover</a></td>

        </tr>
        @endforeach
    </table>
</body>

</body>

</html>
