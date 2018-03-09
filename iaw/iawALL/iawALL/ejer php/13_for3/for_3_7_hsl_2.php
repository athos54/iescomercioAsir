<?php
/**
 * Tablas de colores (Resultado) - for_3_7_hsl_2.php
 */
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tablas de colores (Resultado). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
    <style type="text/css">
      table { margin-bottom: 20px; }
      td, th { width: 40px; height: 40px; text-align: center; }
    </style>
  </head>

  <body>
    <h1>Tablas de colores (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$numero = recoge("numero");

$numeroOk = false;

$numeroMinimo = 1;
$numeroMaximo = 20;

if ($numero == "") {
    print "<p class=\"aviso\">No ha escrito el número de tablas.</p>\n\n";
} elseif (!is_numeric($numero)) {
    print "<p class=\"aviso\">No ha escrito el número de tablas como número.</p>\n\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No ha escrito el número de tablas "
        . "como número entero positivo.</p>\n\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El número de tablas debe estar entre "
    	. "$numeroMinimo y $numeroMaximo.</p>\n\n";
} else {
	$numeroOk = true;
}

if ($numeroOk) {
    $paso = ($numero > 1) ? 255 / ($numero - 1) : 0;
    for ($k = 0; $k < $numero; $k++) {
        print "<table class=\"conborde\">\n";
        print "<caption>Hue: " . ($k * $paso) . "</caption>\n";
        print "<tbody>\n";
        print "<tr>\n";
        print "<td>S \ L</td>\n";
        for ($j = 0; $j < $numero; $j++) {
            print "<td>" . round($j * $paso / 255 * 100)."%</td>\n";
        }
        print "</tr>\n";
        for ($i = 0; $i < $numero; $i++) {
            print "<tr>\n";
            print "<td>" . round($i * $paso / 255 * 100) . "%</td>\n";
            for ($j = 0; $j < $numero; $j++) {
                print "<td style=\"background-color:hsl("
                    . round($k * $paso) . "," . round($i * $paso / 255 * 100)
                    . "%," . round($j * $paso / 255 * 100) . "%)\" title=\"H:"
                    . round($k * $paso) . " S:" . round($i * $paso / 255 * 100)
                    . "% L:" . round($j * $paso / 255 * 100) . "%\"></td>\n";
            }
            print "</tr>\n";
        }
        print "</tbody>\n";
        print "</table>\n";
        print "\n";
    }
}

?>
    <p><a href="for_3_7_hsl_1.php">Volver al formulario.</a></p>

    
  </body>
</html>