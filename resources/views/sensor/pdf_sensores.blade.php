<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senores</title>
</head>
<body>

    <table class="table table-strirped">
        <thead>
            <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

            </tr>

        </thead>
        @foreach($sensor1 as $sensor)
        <tr>
            <td>{{ $sensor -> id_sensor }}</td>
            <td>{{$sensor -> nombre }}</td>
            <td>{{$sensor -> status}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
