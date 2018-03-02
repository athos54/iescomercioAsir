<?php
session_name('misesion');
session_start();

$_SESSION['nombre']=$_POST['nombre'];
header('location:sesion.html');
?>
