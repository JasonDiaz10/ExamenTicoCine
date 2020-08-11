<?php

   require dirname(__DIR__).'/LogicaNegocio/GeneroServicios.php';
   require dirname(__DIR__).'/view/include/header.php';


if(isset($_GET['codigo']))
{
    $codigo = $_GET['codigo'];
    
    $servicios = new GeneroServicios;
    $genero = $servicios->obtenerGeneroByCodigo($codigo);
    
    
    
} 
   


?>


<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tico-Cine</title>
    <link rel="icon" href="../assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="../assets/img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Mantenimiento de Peliculas
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="../view/RegistrarPelicula.php"> Registrar Película</a>
                                            <a class="dropdown-item" href="../view/ModificarPelicula.php">Modificar Película</a>
                                            <a class="dropdown-item" href="../view/EliminarPelicula.php">Eliminar Película</a>
                                        </div>
                                    </li>
                                     <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Mantenimiento de Género
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                           <a class="dropdown-item" href="/view/RegistrarGenero.php"> Registrar Género</a>
                                            <a class="dropdown-item" href="/view/ModificarGenero.php">Modificar Género</a>
                                            <a class="dropdown-item" href="/view/ListarGenero.php">Listar Géneros</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>Modificar Genero</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
        
        <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Modificar Genero</h2>
        </div>
        <div class="col-lg-8">
            <form class="form-contact contact_form" action="../Controladores/GeneroController.php" method="post" id="contactForm"
                  novalidate="novalidate">
    <section>
        <form method="post" action="../Controladores/GeneroController.php" enctype="multipart/form-data">	
            <input type="text" name="codigo" value="<?=$genero->getCodigo();?>" readonly="">
            <input type="text" name="nombre" value="<?=$genero->getNombre();?>">
            <input type="submit" name="accion" value="actualizar">
        </form>
    </section>

        
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>

