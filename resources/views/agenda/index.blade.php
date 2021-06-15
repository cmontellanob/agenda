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
                Nombres
            </th>
            <th>
                Apellidos
            </th>
            <th>
                Sexo
            </th>
            <th>
                Celular
            </th>
            <th>
                Direccion
            </th>
            <th>
                Operaciones
            </th>


        </tr>
        @foreach($agendas as $agenda)
        <tr>
            <td>{{$agenda->nombre}}</td>
            <td>{{$agenda->apellidos}}</td>
            <td>{{$agenda->sexo}}</td>
            <td>{{$agenda->celular}}</td>
            <td>{{$agenda->direccion}}</td>
            <td><a href="{{route('agenda.edit',$agenda->id)}}">Editar</a>
                <form action="{{route('agenda.destroy',$agenda->id)}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input type="submit" value="eliminar">
                </form>

            </td>

        </tr>
        @endforeach
    </table>

    <a href="{{route('agenda.create')}}">Crear</a>

</body>

</html>