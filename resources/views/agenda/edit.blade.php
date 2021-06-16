@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    
    <form action="{{route('agenda.update',$agenda->id)}}" method="POST">
      {{ csrf_field() }}
      @method('PUT')
      <label for="nombre">nombre</label>
      <input class="form-control" type="text" name="nombre" value="{{$agenda->nombre}}"> <br>
      <label for="apellidos">apellidos</label>
      <input class="form-control" type="text" name="apellidos" value="{{$agenda->apellidos}}"> <br>
      <label for="Sexo">Sexo</label>
      <input class="form-check-input" type="radio" name="sexo"  {{$agenda->sexo=='F'?'checked':''}} value="F">Femenino
      <input class="form-check-input" type="radio" name="sexo"  {{$agenda->sexo=='M'?'checked':''}} value="M">Masculino  
      <br>
      <label for="celular">celular</label>
      <input class="form-control" type="text" name="celular" value="{{$agenda->celular}}"> <br>
      <label for="direccion">direccion</label>
      <input class="form-control" type="text" name="direccion" value="{{$agenda->direccion}}"> <br>
       <input class="btn btn-success" type="submit" value="Actualizar">

    </form>
@stop