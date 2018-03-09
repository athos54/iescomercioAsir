<?php
/**
 * Controles en formularios (1) 5-2 - controles_formularios_1_5_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Fruta preferida 2 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Fruta preferida 2 (Resultado)</h1>

    <p>Esta es su fruta favorita:</p>

<?php

// si no elige ninguna ...
$fruta  = $_REQUEST['fruta'];
print "<p><img src=\"img/frutas/$fruta\" width=\"300\" /></p>\n";

// si no elige ninguna Intento arreglarlo pero da error...
$fruta  = $_REQUEST['fruta'];
if ($fruta=="")
print "<p style=\"color: red\">No ha escrito su nombre.</p>\n";
else
print "<p><img src=\"img/frutas/$fruta\" width=\"300\" /></p>\n";

// si no elige ninguna El control no estara establecido ISSET

if (isset($_REQUEST['fruta']))
	 { // Llave mas de una instruccion
  $fruta  = $_REQUEST['fruta'];
  print "<p><img src=\"img/frutas/$fruta\" width=\"300\" /></p>\n";
  }
else
     print "<p style=\"color: red\">No ha escrito su nombre.</p>\n";
  

?>

    <p><a href="controles_formularios_1_5_1.php">Volver al formulario.</a></p>

   
  </body>
</html>
