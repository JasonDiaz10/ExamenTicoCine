<?php   

   require dirname(__DIR__).'/LogicaNegocio/GeneroServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarGenero();
            break;  
        case 'actualizar':
            actualizarGenero();
            break;  
    }
  }


  header("location:../index.php");
  
  function guardarGenero(){
   
      $nombre = $_POST['nombre'];
        
      $registro = new Genero(0,$nombre);
      
      $servicios = new GeneroServicios();
      $servicios->agregarGenero($registro);
  }
  


  function actualizarGenero(){
         
      $codigo=$_POST['codigo'];
      $nombre = $_POST['nombre'];
        
      $registro = new Genero($codigo,$nombre);
      
      $servicios = new GeneroServicios();
      $servicios->modificarGenero($registro);
  }  

?>