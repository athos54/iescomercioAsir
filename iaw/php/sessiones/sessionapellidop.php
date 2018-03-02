<?php
session_name('misesion');
session_start();

$_SESSION['apellido']=$_POST['apellido'];
header('location:sesion.html');
?>
