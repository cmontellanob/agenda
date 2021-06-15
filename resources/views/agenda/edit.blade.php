<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('agenda.update',$agenda->id)}}" method="POST">
      {{ csrf_field() }}
      @method('PUT')
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" value="{{$agenda->nombre}}"> <br>
      <label for="apellidos">apellidos</label>
      <input type="text" name="apellidos" value="{{$agenda->apellidos}}"> <br>
      <label for="Sexo">Sexo</label>
      <input type="radio" name="sexo"  {{$agenda->sexo=='F'?'checked':''}} value="F">Femenino
      <input type="radio" name="sexo"  {{$agenda->sexo=='M'?'checked':''}} value="M">Masculino  
      <br>
      <label for="celular">celular</label>
      <input type="text" name="celular" value="{{$agenda->celular}}"> <br>
      <label for="direccion">direccion</label>
      <input type="text" name="direccion" value="{{$agenda->direccion}}"> <br>
       <input type="submit" value="Actualizar">

    </form>
</body>
</html>