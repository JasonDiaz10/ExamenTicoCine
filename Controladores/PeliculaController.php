<?php   

   require dirname(__DIR__).'/LogicaNegocio/PeliculaServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarPelicula();
            break;  
        case 'actualizar':
            actualizarPelicula();
            break;  
    }
  }

  //Aquí entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarPelicula();            
            break;          
    }
  }  
  header("location:../index.php");
  
  function guardarPelicula(){
   
      $nombre = $_POST['nombre'];
      $director= $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $genero = $_POST['genero'];
      $puntuacion = $_POST['puntuacion'];
      $imagen = file_get_contents($_FILES['file']['tmp_name']);
         
      $registro = new Pelicula(0,$nombre,$director,$sinopsis,$genero,$puntuacion,$imagen);
      
      $servicios = new PeliculaServicios();
      $servicios->agregarPelicula($registro);
  }
  
  function eliminarPelicula(){
      $codigo = $_GET['codigo'];
       
      $servicios = new PeliculaServicios();
      $servicios->eliminarPelicula($codigo);
  }

  function actualizarPelicula(){
      
      $codigo = $_POST['codigo'];
      $nombre = $_POST['nombre'];
      $director= $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $genero = $_POST['genero'];
      $puntuacion = $_POST['puntuacion'];
      $imagen = file_get_contents($_FILES['file']['tmp_name']);
         
      $registro = new Pelicula($codigo,$nombre,$director,$sinopsis,$genero,$puntuacion,$imagen);
      
      $servicios = new PeliculaServicios();
      $servicios->modificarPelicula($registro);
  }  

?>