<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php include 'inc/head_common.inc'; ?>
        <link rel="stylesheet" href="css/fondo-inicio.css">

        <title>SAE-OnLine</title>
    </head>
    <body>
        <?php include 'inc/header.inc'; ?>

        <div class="container inicio">
            <div class="row">
                <div class="col-xs-12">
                    <div id="divlogin" class="apps"> <?php include('login.php'); ?> </div>
                    <div id="divreg"   class="apps"> <?php include('reg_user.php') ?> </div>
                    <img id="logoSAE" src="img/logo.png" alt="LogoSAE">
                </div>
            </div>
        </div>

        <?php include 'inc/footer.inc'; ?>
        <?php include 'inc/footer_common.inc'; ?>
    </body>
</html>