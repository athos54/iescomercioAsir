<?php
session_name('misesion');
session_start();
if(isset($_SESSION['nombre']) && isset($_SESSION['apellido'])){
  echo "Tu nombre completo es ".$_SESSION['nombre']." ".$_SESSION['apellido'];
}

?>
<br>
<a href="sesion.html">volver</a>
