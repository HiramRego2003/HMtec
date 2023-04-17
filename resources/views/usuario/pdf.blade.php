<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <b>Reporte de Usuarios</b>
    <table class="table table-strirped">
        <thead>
            <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fn</th>
                    <th>Genero</th>
                    <th>Email</th>
            </tr>

        </thead>
        @foreach($usuarios1 as $usuario)
        <tr>
            <td>{{ $usuario -> id_usuario }}</td>
            <td><img src="{{ asset ('img/'.$usuario->foto) }}" style="width:50px"></td>
            <td>{{ $usuario -> nombre}}</td>
            <td>{{ $usuario -> app}} {{ $usuario -> ap}}</td>
            <td>{{ $usuario -> fn}}</td>
            <td>{{ $usuario -> gen}}</td>
            <td>{{ $usuario -> email}}</td>
               </tr>
        @endforeach
    </table>
</body>
</html>
