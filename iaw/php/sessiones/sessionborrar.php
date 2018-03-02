<?php
session_name('misesion');
session_start();

unset($_SESSION['nombre']);
unset($_SESSION['apellido']);
header('location:sesion.html');
?>
