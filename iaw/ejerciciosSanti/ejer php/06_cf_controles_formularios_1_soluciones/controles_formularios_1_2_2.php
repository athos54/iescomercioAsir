<?php
/**
 * Controles en formularios (1) 2-2 - controles_formularios_1_2_2.php
 *
 * @version   2016-10-27
 
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dibuja cuadrado 1 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Dibuja cuadrado 1 (Resultado)</h1>

<?php


$ancho = $_REQUEST['ancho'];

print "<svg width=$ancho height=$ancho> \n"; 
print "<rect x=\"0\" y=\"0\" width=\"$ancho\" height=\"$ancho\" fill=\"black\" />\n";
print "</svg>\n";

//

print "<svg width=$ancho height=$ancho> \n"; 
print "<rect x=0 y=0 width=$ancho height=$ancho fill=black />\n";
print "</svg>\n";



?>

    <p><a href="controles_formularios_1_2_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-01">1 de noviembre de 2016</time></p>

    </footer>
  </body>
</html>
