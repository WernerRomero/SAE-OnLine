<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php include 'inc/head_common.inc'; ?>
        <link rel="stylesheet" href="css/practica-inicio.css">

        <title>SAE-OnLine</title>
    </head>
    <body>
        <?php include 'inc/header.inc'; ?>

        <div class="container inicio">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <!-- Contenidos -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contenidos</h3>
                        </div>
                        <!-- Inicio de las Unidades -->
                        <div class="panel-body">
                            <!-- Panel Unidades Eléctricas -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Unidades Eléctricas</div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="index.php" class="list-group-item list-group-item-success                  ">Simbologia Electronica</a>
                                            <a href="circuito.php" class="list-group-item list-group-item-info                  ">Circuito Electrico</a>
                                            <a href="uso_breadboard.php" class="list-group-item list-group-item-warning         ">Uso de la Breadboard</a>
                                            <a href="circuito_basico.php" class="list-group-item list-group-item-danger         ">Circuitos Basicos En breadboard</a>
                                            <a href="tester_analogo.php" class="list-group-item list-group-item-success         ">Uso del Tester Analogo</a>
                                            <a href="tester_digital.php" class="list-group-item list-group-item-info            ">Uso del Tester Digital</a>
                                            <a href="ac_cc_medicion_digital.php" class="list-group-item list-group-item-warning ">Medicion De Corriente Alterna y Corriente Directa (Digital)</a>
                                            <a href="ac_cc_medicion_analogo.php" class="list-group-item list-group-item-danger  ">Medicion De Corriente Directa y Corriente Alterna (Analogo)</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!-- Video -->
                        <div class="text-center">
                            <video width="95%" height="50%" style="margin-top:15px;" controls>
                                <source src="video/webm/tester_digital.webm" type="video/webm">
                                <source src="video/mp4/tester_digital.mp4" type="video/mp4">
                                
                                Your browser does not support the video tag/Tu navegados no suporta la etiqueta de video.
                        </div>

                        <br>
                        <div class="panel panel-primary aki">
                            <div class="panel-heading">Descripcion</div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item text-center list-group-item-info " name="El_transistor">Tester Digital</a>
                                        <h4>Uso del Tester Digital</h4>
                                        <p>
                                            En este video estaremos aprendiendo a utilizar el tester digital.
                                        </p>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <!-- Contenido -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">Contenido</div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <h5>Simbolos Que se Muestran en el Video</h5>
                                    <ol>
                                        <li>Tester Digital</li>

                                        <li>Resistencia</li>
                                        <li>Resistencia Ajustable</li>
                                        <li>Bateria</li>
                                        <li>Fuente de Tension</li>
                                        <li>Fuente de Tension Ajustable</li>
                                        <li>Punto de Tension</li>
                                        <li>Polo Tierra, Común o Negativo</li>
                                        <li>Diodo LED</li>
                                    </ol>    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <?php include 'inc/footer.inc'; ?>
        <?php include 'inc/footer_common.inc'; ?>
    </body>
</html>