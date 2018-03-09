<?php
/**
 * Primeras páginas 4 - primeras_paginas_4.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dado digital. Primeras páginas.
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>
  <body>
    <h1>Dado digital</h1>
<?php
print "<p><span style=\"border: black 2px solid;
 padding: 10px; font-size: 300%\">"
  .rand(1, 6). "</span></p>\n";
?>
<p>Actualice la página para mostrar un nuevo valor.</p>
</body>
</html>