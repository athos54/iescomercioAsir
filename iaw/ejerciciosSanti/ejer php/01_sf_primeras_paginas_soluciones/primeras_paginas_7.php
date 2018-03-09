<?php
/**
 * Primeras páginas 7 - primeras_paginas_7.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Saludo. Primeras páginas.
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Saludo</h1>

<?php
print "<p><span style=\"border: black 2px solid;
 padding: 10px; font-size: "
. rand(200, 800)."%\">¡Hola!</span></p>\n";
?>

    <p>Actualice la página para cambiar el tamaño del saludo.</p>

    
  </body>
</html>