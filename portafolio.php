<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php include 'inc/head_common.inc'; ?>
        <link rel="stylesheet" href="css/fondo-portafolio.css">

        <title>SAE-OnLine</title>
    </head>
    <body id='cuerpo'>
        <?php include 'inc/header.inc'; ?>

        <div class="container inicio">
            <div class="row">
                <h2>Formadores</h1>
                <div class="col-xs-12 col-xs-4">
                    <h3>Werner Romero</h3>
                    <img src="img/werner.png" alt="Werner" class="img-rounded img">
                    <p>
                        Werner Francisco Romero, 
                        <br> Usis014512,   
                        <br> Ciclo VI, 
                        <br> Programador</p>
                </div>
                <div class="col-xs-12 col-xs-4">
                    <h3>Kevin Chavez</h3>
                    <img src="img/kevin.png" alt="Kevin" class="img-rounded img">
                    <p>
                        Kevin Oswaldo Chavez Berrios, 
                        <br> Usis018011, 
                        <br> Ciclo VIII,
                        <br> Diseñador</p>
                </div>
                <div class="col-xs-12 col-xs-4">
                    <h3>Ruben Joya</h3>
                    <img src="img/ruben.png" alt="Ruben" class="img-rounded img">
                    <p>
                        René Rubén González Joya, 
                        <br> Usis033212, 
                        <br> Ciclo VI, 
                        <br> Programador</p>
                </div>

                <div id="divlogin" class="apps"> <?php include('login.php'); ?> </div>
                <div id="divreg"   class="apps"> <?php include('reg_user.php') ?> </div>
            </div>
            <div class="row">
                <h2>Docentes</h2>
                <div class="col-xs-12 col-sm-6">
                   <h3>Lic. Alas</h3>
                    <p>
                        Lic. José Mária Alas, 
                        <br> Licenciado en Computacion, 
                        <br> Docente de la Facultad Ciencia y Tecnología
                        <br> Catedrático de Fisica, Eléctronica</p> 
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3>Juan Gabriel</h3>
                    <img src="img/gabriel.png" alt="Werner" class="img-rounded img">
                    <p>
                        Juan Gabriel Hernandez Moises, 
                        <br> Tecnico Superior en Eléctronica   
                        <br> Instructor y encargado del Lab de Eléctronica </p>
                </div>
            </div>
        </div>

        
        <?php include 'inc/footer.inc'; ?>
        <?php include 'inc/footer_common.inc'; ?>
    </body>
</html>