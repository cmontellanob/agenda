<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
</body>
</html>