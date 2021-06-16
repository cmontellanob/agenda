<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>
                Profesion
            </th>
            
            <th>
                Operaciones
            </th>


        </tr>
        @foreach($profesiones as $profesion)
        <tr>
            <td>{{$profesion->profesion}}</td>
            
            <td><a href="{{route('profesion.edit',$profesion)}}">Editar</a>
                <form action="{{route('profesion.destroy',$profesion)}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input type="submit" value="eliminar">
                </form>

            </td>

        </tr>
        @endforeach
    </table>

    <a href="{{route('profesion.create')}}">Crear</a>

</body>

</html>