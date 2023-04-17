<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Sensores</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <style>
        .search-container {
margin: 20px 0;
display: flex;
justify-content: center;
align-items: center;
}

.search-container input[type="text"] {
padding: 10px;
margin-right: 5px;
border: none;
border-radius: 5px;
background-color: #f1f1f1;
width: 70%;
}

.search-container button[type="submit"] {
padding: 10px;
border: none;
border-radius: 5px;
background-color: #4CAF50;
color: white;
cursor: pointer;
}

.search-container button[type="submit"]:hover {
background-color: #45a049;
}

    </style>
</head>
<style>
    .navbar {
      box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
      padding: 0.5rem 1rem;
      border-radius: 5px;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar-nav {
      margin-left: auto;
      margin-right: auto;
      font-size: 1.2rem;
    }

    .nav-link {
      color: #333;
      font-weight: bold;
    }

    .nav-link:hover {
      color: #000;
    }

    .dropdown-menu {
      border-radius: 5px;
      font-size: 1.2rem;
    }

    .dropdown-item {
      color: #333;
      font-weight: bold;
    }

    .dropdown-item:hover {
      background-color: #f8f9fa;
    }

    .tm-logout-icon {
      font-size: 1.2rem;
    }

    .tm-site-title {
      font-size: 2rem;
    }

    @media only screen and (max-width: 768px) {
      .navbar-nav {
        font-size: 1rem;
      }

      .tm-site-title {
        font-size: 1.5rem;
      }

      .navbar-brand {
        margin-right: auto;
      }

      .nav-link {
        font-weight: normal;
      }

      .dropdown-menu {
        font-size: 1rem;
      }

      .tm-logout-icon {
        font-size: 1rem;
      }
    }
  </style>
<body>
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="{{route('admin')}}">
                          <h1 class="tm-site-title mb-0">HMtec</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                              <a class="nav-link active" href="{{route('grafica')}}">Graficas
                                <span class="sr-only">(current)</span>
                              </a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                CRUD'S
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('lista_usuarios')}}">Usuarios</a>
                                <a class="dropdown-item" href="{{route('lista_sensores')}}">Sensores</a>
                              </div>
                            </li>
                          </ul>
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link d-flex" href="{{route('index')}}">
                                <i class="far fa-user mr-2 tm-logout-icon"></i>
                                <span>Logout</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                </div>
            </div>
        <!-- row -->
        <div class="container">
            <h1>Lista de sensores</h1>
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="{{ route('pdf_sensores') }}" class="btn btn-outline-danger">PDF</a>
                    <a href="{{ route('SensorExport') }}" class="btn btn-outline-success">Excel</a>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('alta_sensor') }}" class="btn btn-outline-info">Agregar Sensor</a>
                </div>
            </div>
            <div class="row">
                <div class="search-container">
                    <input type="text" placeholder="Buscar" name="search" id="search-input">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="sensor-table">
                    @foreach ($sensores as $sensor)
                        <tr>
                            <td>{{ $sensor->id_sensor }}</td>
                            <td>{{ $sensor->nombre }}</td>
                            <td>{{ $sensor->status }}</td>
                            <td>
                                <a href="{{ route('editar_sensores', $sensor->id_sensor) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('borrar_sensor', $sensor->id_sensor) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este sensor?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <script>
            const searchInput = document.getElementById("search-input");
            const sensorTable = document.getElementById("sensor-table");
            const rows = sensorTable.getElementsByTagName("tr");

            searchInput.addEventListener("keyup", function(event) {
                const filter = event.target.value.toLowerCase();

                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const columns = row.getElementsByTagName("td");
                    let found = false;

                    for (let j = 0; j < columns.length; j++) {
                        const column = columns[j];

                        if (column.innerHTML.toLowerCase().includes(filter)) {
                            found = true;
                            break;
                        }
                    }

                    if (found) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>

</body>

</html>
