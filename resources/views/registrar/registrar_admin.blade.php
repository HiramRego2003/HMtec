<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: ghostwhite;

      }
      form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f2f2f2;
      }
      input[type=text], input[type=password], input[type=date], input[type=file] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      label {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <center>
    <h2><i id="lol">Registro de nuevo Admin</i></h2>
</center>
<hr class="text-danger border-2 opacity-50">
    <form action="{{ route('registrar_administrador') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field ()}}
        <table>
          <tr>
            <td>
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        {{ $error }} <br>
        @endforeach
        @endif
        </table>
        <div class="input-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" required>
      @if($errors->first('nombre') ) <i>{{ $errors->first('nombre') }}</i> @endif
    </output>
</div>

<div class="input-group">
      <label for="apellido_paterno">Apellido paterno:</label>
      <input type="text" id="apellido_paterno" name="app" value="{{old('app')}}" required>
      @if($errors->first('app') ) <i>{{ $errors->first('app') }}</i> @endif </output>
    </div>

    <div class="input-group">
      <label for="apellido_materno">Apellido materno:</label>
      <input type="text" id="apellido_materno" name="ap" value="{{old('ap')}}" required>
      @if($errors->first('ap') ) <i>{{ $errors->first('ap') }}</i> @endif
    </output>
    </div>

    <div class="input-group">
      <label for="fecha_nacimiento">Fecha de nacimiento:</label>
      <input type="date" id="fecha_nacimiento" name="fn" value="{{old('fn')}}" required>
      @if($errors->first('ap') ) <i>{{ $errors->first('ap') }}</i> @endif
</output>
</div>

      <div  class="input-group">
        <div id="cma">
        <input type="radio" name="gen" value="Femenino" checked>Femenino<br></button>
        <input type="radio" name="gen"  value="Masculino"> Masculino <br></button>
        </div>
        </div>

      <label for="foto">Foto:</label>
      <input type="file" id="foto" name="foto" accept="image/*" required>

      <div class="input-group mb-3">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="email" value="{{ old('email') }}" required>
      @if($errors->first('email') ) <i>{{ $errors->first('email') }}</i> @endif</output>
    </div>

      <div class="input-group mb-3">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="pass" value="{{ old('pass') }}" required>
      @if($errors->first('pass') ) <i>{{ $errors->first('pass') }}</i> @endif</output>
</div>

      <button type="submit">Registrarse</button>
    </form>
  </body>
</html>
