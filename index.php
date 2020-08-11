<?php require_once './view/include/header.php';   ?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tico-Cine</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Mantenimiento de Peliculas
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="./view/RegistrarPelicula.php"> Registrar Película</a>
                                            <a class="dropdown-item" href="./view/peliculaActualizar.php">Modificar Película</a>
                                            <a class="dropdown-item" href="./view/EliminarPelicula.php">Eliminar Película</a>
                                            <a class="dropdown-item" href="./view/cerrarSesion.php">Salir</a>
                                        </div>
                                    </li>
                                     <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Mantenimiento de Género
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="./view/RegistrarGenero.php"> Registrar Género</a>
                                            <a class="dropdown-item" href="./view/ModificarGenero.php">Modificar Género</a>
                                            <a class="dropdown-item" href="./view/ListarGenero.php">Listar Géneros</a>
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


        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>Tico-Cine</h1>
                                <p>La mejor experiencias en peliculas! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->
        
         <section>
            <br>
            <h1>Lista de Peliculas</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>Codigo de Pelicula</th>
                        <th>Nombre de la Pelicla</th>
                        <th>Director</th>
                        <th>Sinopsis</th>
                        <th>Genero</th>
                        <th>Puntuacion</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($peliculas) >0):  
                        foreach ($peliculas as $posicion => $pelicula):  ?>
                            <tr>
                                <td><?=$pelicula->getCodigoPelicula();?></td>
                                <td><?=$pelicula->getNombre();?></td>
                                <td><?=$pelicula->getDirector();?></td>
                                <td><?=$pelicula->getSinopsis();?></td>
                                <td><?=$pelicula->getGenero();?></td>
                                <td><?=$pelicula->getPuntuacion();?></td>
                                <td><a href="view/ModificarPelicula.php?nombre=<?=$pelicula->getNombre();?>">Editar</a></td>
                                <td><a href="Controladores/PeliculaController.php?accion=eliminar&codigopelicula=<?=$pelicula->getCodigoPelicula();?>">Borrar</a></td>
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
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
