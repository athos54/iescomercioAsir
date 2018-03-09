<?php
/**
 * Primeras páginas 5 - primeras_paginas_5.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dado digital gráfico. Primeras páginas.
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Dado digital gráfico</h1>

<?php
$n=rand(1,6);
print "<p><img src=\"img/$n.svg\" 
alt=\"Dado\" width=\"140\" height=\"140\" /></p>\n";
?>

    <p>Actualice la página para mostrar un nuevo valor.</p>

    
  </body>
</html>