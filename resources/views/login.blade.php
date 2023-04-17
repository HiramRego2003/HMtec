<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>
<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="tm-block-title mt-3">Login </h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form name="login" action="{{ route('valida') }}" method="GET">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Usuario</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="al222110849@gmail.com" value="{{old('email')}}"  required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="pass" placeholder="1234" name="pass" value="{{old('pass')}}" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="exampleFormControlInput" class="form-label"></label>
                                    <input type="submit" class="btn btn-primary btn-sn" value="Ingresar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
