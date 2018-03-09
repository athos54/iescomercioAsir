<?php
/**
 * Primeras páginas 6 - primeras_paginas_6.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Código de color. Primeras páginas.
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Código de color</h1>

<?php
print "<p>Color: rgb(" . rand(0, 255) . 
", " . rand(0, 255) . ", " . rand(0, 255)
 . ")</p>\n";
//Otra forma
$n1=rand(0, 255);
$n2=rand(0, 255);
$n3=rand(0, 255);
print "<p>Color: rgb($n1,$n2,$n3)</p>\n";


?>

    <p>Actualice la página para mostrar un nuevo valor.</p>

    
  </body>
</html>