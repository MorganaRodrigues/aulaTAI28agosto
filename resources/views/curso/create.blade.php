<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3>formulario cursos</h3>
<form action="{{action('CursoController@store')}}" method="post">
    @csrf
        <label>Nome</label>
        <input type="text" name="nome" /> <br>

        <label>Abreviatura</label>
        <input type="text" name="abreviatura"/> <br>

        <button type="submit">Salvar</button>
    <a href="{{url('curso')}}">Voltar</a>
    </form>
</body>

</html>
