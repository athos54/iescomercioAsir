<?php
session_name('misesion');
session_start();


if($_POST['accion']=='Enviar'){
  $numeroNuevo=rand(1,6);
  $_SESSION['suma']=$_SESSION['suma']+$numeroNuevo;
  $_SESSION['ultimoNumero']=$numeroNuevo;
}else{
  $_SESSION['suma']=0;
  $_SESSION['ultimoNumero']=0;
}
header('Location: ejercicio4.php');
?>
