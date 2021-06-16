@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    
    <form action="{{route('agenda.store')}}" method="POST">
      {{ csrf_field() }}
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" id=""> <br>
      <label for="apellidos">apellidos</label>
      <input type="text" name="apellidos" id=""> <br>
      <label for="Sexo">Sexo</label>
      <input type="radio" name="sexo"  checked value="F">Femenino
      <input type="radio" name="sexo"   value="M">Masculino  
      <br>
      <label for="celular">celular</label>
      <input type="text" name="celular" id=""> <br>
      <label for="direccion">direccion</label>
      <input type="text" name="direccion" id=""> <br>
       <input type="submit" value="Registrar">

    </form>
@stop