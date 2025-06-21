<?php
  session_start();
  if ($_POST['txtUsuario']=='Tomas' and $_POST["txtClave"]=='123' )
  $_SESSION['admin']=$_POST['txtUsuario'];
  else 
     $_SESSION['error']='Usuario Incorrecto';
    
  header('location:index.php');
?>