                <!DOCTYPE html>
                <html>
                <head>
                    <title>Editar Usuario</title>
                    <style>
                        .container {
                            width: 50%;
                            margin: 0 auto;
                            padding: 20px;
                            border: 1px solid #ccc;
                            border-radius: 10px;
                        }
                        label {
                            display: block;
                            margin-bottom: 5px;
                        }
                        input[type="text"], input[type="date"], input[type="password"] {
                            width: 100%;
                            padding: 10px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            margin-bottom: 20px;
                        }
                        input[type="file"] {
                            margin-bottom: 20px;
                        }
                        select {
                            width: 100%;
                            padding: 10px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            margin-bottom: 20px;
                        }
                        button {
                            padding: 10px 20px;
                            background-color: #007bff;
                            color: #fff;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                        }
                        button:hover {
                            background-color: #0069d9;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <h2>Editar Usuario</h2>
                        <form method="post" action="{{ route('salvar_usuarios',[$usuarios->id_usuario])}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="{{ $usuarios->nombre }}" required>
                            <label for="apellido_paterno">Apellido Paterno:</label>
                            <input type="text" id="apellido_paterno" name="app" value="{{ $usuarios->app }}" required>
                            <label for="apellido_materno">Apellido Materno:</label>
                            <input type="text" id="apellido_materno" name="ap" value="{{ $usuarios->ap}}" required>
                            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                            <input type="date" id="fecha_nacimiento" name="fn" value="{{ $usuarios->fn }}" required>
                            <label for="genero">Género:</label>
                            <div  class="input-group"><div id="cma">
                                <input type="radio" name="gen" value="Femenino"  {{ $usuarios->gen == "Femenino"?'cheked':''; }}> Femenino   <br></button>
                                <input type="radio" name="gen"  value="Masculino"  {{ $usuarios -> gen == "Masculino"?'cheked':''; }}> Masculino <br></button>
                            </div>
                            <label for="foto">Foto:</label>
                            <input type="file" id="foto" name="foto" >
                            <label for="usuario">Usuario:</label>
                            <input type="text" id="usuario" name="email" value="{{ $usuarios -> email }}" required>
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="pass" value="{{ $usuarios -> pass }}" required>
                            <button type="submit">
                                Guardar
                            </button>
                        </form>
                    </div>
                </body>
                </html>
