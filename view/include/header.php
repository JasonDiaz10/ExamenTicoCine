<?php 
   session_start(); 
   if(!isset($_SESSION['usuarioLogueado'])){
       header("Location: view/login.php");
   }
?>
