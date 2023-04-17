<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body{
        color: ;
        background-size: 300px;              }
    #best{
        margin-top: 80px;
    background-repeat: no-repeat;
    background-size: 1300px;
        text-align: center;
        width: 50%;                          }

    input,select{
            margin-left: 100px;
            float: center;
            background:;                      }
        #lol{            color: #0000ff;       }
     #coca {      background: #2C4EC0;        }
        #cma{   margin-left: 300px;           }
       #lom{ margin-left: 340px;              }
       #comit{ margin-left: 380px;            }
        select{  background: #C1BCBC;         }
</style>
</head>
<body>
<br><center>
    <div id="best">
        <h1 id="lol">Registro de nuevo Sensor</h1><hr class="text-danger border-2 opacity-50">
        <form action="{{ route('registrar_sensor') }}" method="POST"class="row g-3" enctype="multipart">
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
        <span class="input-group-text" style="margin-left: 60px"> Nombre:</span>
        <input type="text" aria-label="First name" class="form-control" name="nombre" style="margin-right: 20px" value="{{ old('nombre') }}">
        @if($errors->first('nombre') ) <i>{{ $errors->first('nombre') }}</i> @endif
            </output>
        </div>

        <div class="input-group">
          <span class="input-group-text" style="margin-left: 60px">Status:</span>
          <input type="text" aria-label="LApellido Paterno" class="form-control" name="status" value="{{ old('status') }}">
          @if($errors->first('status') ) <i>{{ $errors->first('status') }}</i> @endif </output>
          </div>
        </div>
 <br><div>
                    <button type="submit" class="btn btn-primary" value="">Registar</button>

</form>



</body>
</html>
