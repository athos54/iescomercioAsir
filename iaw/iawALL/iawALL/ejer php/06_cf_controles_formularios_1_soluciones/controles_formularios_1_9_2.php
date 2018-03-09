<?php
/**
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
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$ancho  = recoge("ancho");
$grosor = recoge("grosor");

print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n"
    . "      width=\"" . ($ancho + 2 * $grosor) ."px\" height=\"" . ($ancho + 2 * $grosor) ."px\">\n";
print "      <rect fill=\"white\" stroke=\"black\" stroke-width=\"$grosor\" "
. "x=\"" . ($grosor / 2) . "\" y=\"" . ($grosor / 2) . "\" width=\"" . ($ancho + $grosor) . "\" height=\"" . ($ancho + $grosor) . "\" />\n";
print "</svg>\n";
?>

    <p><a href="controles_formularios_1_9_1.php">Volver al formulario.</a></p>

  </body>
</html>
