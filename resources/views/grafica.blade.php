<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grafica</title>
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/hmcon.png">

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>

<body>
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <h1 class="tm-site-title mb-0">HMtec</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('grafica')}}">
                                        Graficas
                                     </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Reportes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('lista_usuarios')}}">Usuarios</a>
                                        <a class="dropdown-item" href="{{route('lista_sensores')}}">Sensores</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="{{route('logout')}}">
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
            <br>
            <div class="bg-white tm-block h-100">
    <div class="container">
        <div style="width: 100%" >
            <h1>Grafica de Barras</h1>
            <br>
            <br>
            <canvas id="bar-chart" width="800" height="450"></canvas>
                </div>
    </div>

    <br>
    <hr>
    <br><br>
    <br>
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: [
            @foreach ($datos as $dato)
            "{{$dato->id_especi }}"
            @endforeach
          ]
          ,
          datasets: [
            {
              label: "Temperatura minima",
              backgroundColor: [
                @foreach ($datos as $dato)
                        "#" + Math.floor(Math.random()*16777215).toString(16),
                  @endforeach
              ],
              data: [
                @foreach ($datos as $dato)
                "{{$dato->max_c }}",
                @endforeach
              ]
            },
            {
                label: "Temperatura Maxia",
                backgroundColor: [
                  @foreach ($datos as $dato)
                          "#" + Math.floor(Math.random()*16777215).toString(16),
                    @endforeach
                ],
                data: [
                  @foreach ($datos as $dato)
                  "{{$dato->max_c }}",
                  @endforeach
                ]
              },
              {
                label: "Nivel minimo de CO2",
                backgroundColor: [
                  @foreach ($datos as $dato)
                          "#" + Math.floor(Math.random()*16777215).toString(16),
                    @endforeach
                ],
                data: [
                  @foreach ($datos as $dato)
                  "{{$dato->max_c }}",
                  @endforeach
                ]
              },
              {
                label: "Nivel maximo de CO2,
                backgroundColor: [
                  @foreach ($datos as $dato)
                          "#" + Math.floor(Math.random()*16777215).toString(16),
                    @endforeach
                ],
                data: [
                  @foreach ($datos as $dato)
                  "{{$dato->max_c }}",
                  @endforeach
                ]
              },
              {
                label: "Nivel maxima de luxes",
                backgroundColor: [
                  @foreach ($datos as $dato)
                          "#" + Math.floor(Math.random()*16777215).toString(16),
                    @endforeach
                ],
                data: [
                  @foreach ($datos as $dato)
                  "{{$dato->max_c }}",
                  @endforeach
                ]
              },
              {
                label: "Nivel maxima de luxes",
                backgroundColor: [
                  @foreach ($datos as $dato)
                          "#" + Math.floor(Math.random()*16777215).toString(16),
                    @endforeach
                ],
                data: [
                  @foreach ($datos as $dato)
                  "{{$dato->max_c }}",
                  @endforeach
                ]
              }
          ]
        },
        options: {
            legend: { display: false },
            title: {
              display: true,
              text: 'Predicted world population (millions) in 2050'
            }
          }
      });

            </div>

    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
</body>
</html>
