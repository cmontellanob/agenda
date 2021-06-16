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
      <label for="profesion">profesion</label>
      <input type="text" name="profesion" id=""> <br>
      
       <input type="submit" value="Registrar">

    </form>
</body>
</html>