<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Proyecto de Programacion Web">
    <meta name="keywords" content="ESPOL, B-Smart">
    <meta name="author" content="Grupo 4"/>
    <meta name="robots" content="index, follow">


    <title>B-Smart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- Animacije -->
    

    <!-- Font Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- parte 2 -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
 
    <script src="js/ie-emulation-modes-warning.js"></script>




</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    


    <section id="intro" class="intro-section">
          <!-- Video Background -->
        <video id="video_background" preload="auto" autoplay="autoplay" muted="muted" loop="loop"> 
               <source src="video/educacion.mp4" type="video/mp4" />
                
        </video> 
        <!-- / End Video Start Container -->       
        <div class="wow bounceIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>El conocimiento es poder. <br>  ¡Ármate!</h1>
                    <p class="slogan"><mark class="gray">  B-Smart </mark></p>
                    </div>
                    <a class="home-button page-scroll" href="home.php" target="_top">EMPECEMOS</a>
                    <a class="home-button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-star"></i> LOGIN</a>

                    <!-- VENTANA MODAL PARA LOGIN -->

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg modallog" tabindex="-1" role="dialog" id="myModal" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog mimodal">
                        <div class="modal-content modal-login">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title " id="myModalLabel">Identifícate o Crea una Cuenta</h4>
                          </div>
                          <div class="modal-body">

                            <section class="row mt">
                                  <div class="col-xs-6">
                                  </div>
                                    <div class="container">
                                      <div class="row fondo-login">
                                        <div class="col-md-3 space-right-2 linea">
                                            <section class="login element-emphasis-strong">
                                                <h3 class="strong-header large-header">
                                                    Identifícate
                                                </h3>

                                            
                                                <form action="login/datos.php" method="post" >
                                                    <div class="form-group">
                                                        <label type="text">Usuario</label>
                                                        <input type="text" name="usuario" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Contraseña</label>
                                                        <input type="password" name="pasw" >
                                                    </div>
                                                    
                                                    <p><button type="submit">Iniciar Sesion</button></p>
                                                    <div class="clearfix"></div>
                                                </form>
                                         

                                            </section>
                                        </div>
                                        
                                      </div>
                                    </div>
                                </section>
                          </div>
                          
                        </div>
                      </div>
                    </div>


                    <!-- FIN VENTANA MODAL -->
            </div>
        </div>
        </div>
    </section>


<!-- Contenedor -->





<!--************************** footer ************************-->
    <footer>
          
      

    </footer>


    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- / Contact -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        $(document).ready(function () {
            $('#tooltipa').tooltip();
            $('#tooltippic').tooltip();
            $('#tooltipskype').tooltip();
            $('#tooltiplinkedin').tooltip();
            $('#tooltipfacebook').tooltip();
            $('#tooltipgoogle').tooltip();
            $('#tooltipinstagram').tooltip();
        });
    </script>
</body>
</html>
