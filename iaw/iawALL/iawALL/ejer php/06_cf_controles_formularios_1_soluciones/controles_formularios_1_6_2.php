<?php
/**
   */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Colores 1 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Colores 1 (Resultado)</h1>

<?php

if (isset($_REQUEST['fondo']))
	$fondo  = $_REQUEST['fondo'];
else 
	$fondo="";
if (isset($_REQUEST['letra']))
	$letra  = $_REQUEST['letra'];
else 
	$letra="";
if ($fondo<>"" and $letra<>"") 
	print "<p>Usted quiere cambiar: $fondo y $letra</p>\n";
elseif	($fondo=="" and $letra=="" )
	print "<p>Usted no quiere cambiar nada</p>\n";
else
	print "<p>Usted quiere cambiar: $fondo  $letra</p>\n";
?>
    <p><a href="controles_formularios_1_6_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-24">24 de octubre de 2016</time></p>

    </footer>
  </body>
</html>
