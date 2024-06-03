<style>
 
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#btn-mas {
    display: none;
}

.containerrrrr {
    position: fixed;
    bottom: 20px;
    left: 20px; /* Cambiado de right a left */
    z-index: 1000; /* Asegurar que esté por encima del footer */
}

.redes a, .btn-mas label {
    display: block;
    text-decoration: none;
    background: #cc2b2b;
    color: #fff;
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
    transition: all 500ms ease;
}

.redes a:hover {
    background: #fff;
    color: #cc2b2b;
}

.redes a {
    margin-bottom: -15px;
    opacity: 0;
    visibility: hidden;
}

#btn-mas:checked ~ .redes a {
    margin-bottom: 10px;
    opacity: 1;
    visibility: visible;
}

.btn-mas label {
    cursor: pointer;
    background: #f44141;
    font-size: 23px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#btn-mas:checked ~ .btn-mas label {
    transform: rotate(135deg);
    font-size: 25px;
}

.redes1 a {
    background: #084AEE;
    color: #fff;
}

.redes1 a:hover {
    background: #3769E5;
    color: #fff;
}

.redes2 a {
    background: #00B2FF;
    color: #fff;
}

.redes2 a:hover {
    background: #2C2E2F;
    color: #fff;
}

.redes3 a {
    background: #25D366;
    color: #fff;
}

.redes3 a:hover {
    background: #128C7E;
    color: #fff;
}


</style>
<?php $LY = &get_instance(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InteclubesPeru</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/img/favicon.ico" />
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jersey+20&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
    
    <link href="<?php echo base_url(); ?>public/css/style_html.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Black&family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <?php include("partials/menu.php"); ?>
    <?php echo $content; ?>
    <div class="row">
    </div>
    <!--BOTON FLOTANTE-->
    <div class="containerrrrr">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
    <div class="redes1">  <a href="#" class="fa fa-facebook fb"></a> </div>
    <!--<div class="redes2">  <a href="#" class="bi bi-messenger mss"></a></div>-->
    <div class="redes2">  <a href="#" class="fa fa-twitter tw"></a></div>
    <div class="redes3">  <a href="#" class="fa fa-whatsapp  wp"></a></div>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fa fa-message"></label>
    </div>
</div>

    
    <!--FOODER-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img class=" fooder-logo" src='<?php echo base_url(); ?>public/img/logo_inter_clubes.png' alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                                 
                <h2><strong>MISIÓN</strong></h2>
                <p class="color-texto">Interclubesperu tiene por objetivo brindar a lo largo del año, un espacio donde se practiqué deporte , dentro de un ambiente sano, cordial, fraterno y competitivo.
                    Teniendo por finalidad ayudar con el esparcimiento, integración y desarrollo de lazos de amistad de los jugadores, así como de las instituciones participantes, a través del deporte.</p>

            </div>
            <div class="box">
            <h2><strong>SIGUENOS</strong></h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy;InterClubesPerú 2024 Copyright © - Todos los Derechos Reservados.</small>
        </div>
    </footer>


    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>public/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script>

    </script>
</body>

</html>