<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h1>Detalle de los Trabajadores</h1>
    <hr>
<center>
    <b><img src="{{ asset ('img/'.$detalle_usuarios->foto) }}" style="width:450px"><br><br>
    <b>NOMBRE:</b>  {{$detalle_usuarios->app . '   ' . $detalle_usuarios->ap . '   ' . $detalle_usuarios-> nombre}} <br>
    <b>FECHA DE NACIMIENTO:</b> {{$detalle_usuarios->fn}}<br>
    <b>GENERO:</b> {{$detalle_usuarios->gen}}<br>
    <b>EMAIL:</b> {{$detalle_usuarios->email}}<br>
    <b>CONTRASENA: {{$detalle_usuarios->pass}}<br>
</center>
<a href="{{route('lista_usuarios')}}">
    <button type="button" class="btn btn-primary">Volver</button>
</a>


</body>
</html>
