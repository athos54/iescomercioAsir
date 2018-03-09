<?php
/**
 * Controles en formularios (1) 4-2 - controles_formularios_1_4_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Fruta preferida 1 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Fruta preferida 1 (Resultado)</h1>

<?php

$fruta  = $_REQUEST['fruta'];
print "<p>Su fruta preferida es $fruta.</p>\n";
?>
    <p><a href="controles_formularios_1_4_1.php">Volver al formulario.</a></p>
  </body>
</html>
