<?php
/**
 * Controles en formularios (1) 3-2 - controles_formularios_1_3_2.php
 * @version   2016-11-01
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dibuja cuadrado 2 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Dibuja cuadrado 2 (Resultado)</h1>

<?php


$ancho = $_REQUEST['ancho'];
print "<svg width=\"" . ($ancho + 8) . "px\" height=\"" . ($ancho + 8) . "px\">\n";
print "<rect fill=\"white\" stroke=\"black\" stroke-width=\"4\" "
. "x=\"2\" y=\"2\" width=\"" . ($ancho + 4) . "\" height=\"" . ($ancho + 4) . "\" />\n";
print "</svg>\n";
// O bien
$ancho4 = $_REQUEST['ancho']+4;
$ancho8 = $_REQUEST['ancho']+8;
print "<svg width=$ancho8 px height=$ancho8 px\">\n";
print "<rect fill=white stroke=black stroke-width=4 
 x=2 y=2 width=$ancho4 height=$ancho4  />\n";
print "</svg>\n";

// mal x=2 y=2 width=($ancho+4) height=($ancho+4)  />\n";

?>
    <p><a href="controles_formularios_1_3_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-01">1 de noviembre de 2016</time></p>

    </footer>
  </body>
</html>
