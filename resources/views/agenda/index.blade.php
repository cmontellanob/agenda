@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <table class="table table-striped table-bordered table-primary">
        <tr class="table-Warning">
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
            <td><a class="btn " href="{{route('agenda.edit',$agenda->id)}}">Editar</a>
                <form action="{{route('agenda.destroy',$agenda->id)}}" method="POST">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <input class="btn " type="submit" value="eliminar">
                </form>

            </td>

        </tr>
        @endforeach
    </table>

    <a href="{{route('agenda.create')}}">Crear</a>

@stop