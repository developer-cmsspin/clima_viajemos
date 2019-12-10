<html lang="es">
    <head>
        <title>VIAJAMOS.COM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link href="css/bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/inicio.css" rel="stylesheet" id="bootstrap-css">
        <script src="css/bootstrap-4.4.1-dist/js/bootstrap.js"></script>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>

    </head>
    <body>

        <main>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">VIAJEMOS.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>



            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="display-4" >Ingrese un sitio para ver su informacion</h4>
                        <div class="col-12 col-md-12 col-lg-12" style="margin-top: 3px">
                            <div class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input id="sitio" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Ingrese el sitio">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" onclick="VerInformacion()">Buscar</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </div>
                        </div>
                        <!--end of col-->
                    </div>
                </div>



            </div>

            <div class="container" class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-4" style="max-width: 25rem;">
                            <div class="card-header">Viento</div>
                            <div class="card-body">
                                <ul>
                                    <li>Temp : <span id="temp" class="badge badge-light"></span></li>
                                    <li>Dir : <span  id="dir" class="badge badge-light"></span></li>
                                    <li>Vel : <span  id="vel" class="badge badge-light"></span></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-warning mb-3" style="max-width: 25rem;">
                            <div class="card-header">Informacion atmosferica</div>
                            <div class="card-body">
                                <ul>
                                    <li>Humedad : <span id="hum" class="badge badge-light"></span></li>
                                    <li>Visibilidad: <span id="visi" class="badge badge-light"></span></li>
                                    <li>Presion : <span id="pre" class="badge badge-light"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                            <div class="card-header">Condicion</div>
                            <div class="card-body">
                                <h5 class="card-title"><span id="con" class="badge badge-light"></span></h5>
                            </div>
                        </div>
                    </div>


                </div>

                <hr>

            </div>

            <div class="container" class="col-12 col-md-12 col-lg-12" id="map"  >

            </div>

            <script src="js/ajax.js"></script>

        </main>
        <br>
        <br>
        <footer class="container">
            <p>&copy; Juan Camilo Cruz 2019 </p>
        </footer>
    </body>
</html>