<?php
/**
 * Tabla de una fila (Resultado) - for_3_1_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tabla de una fila (Resultado). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Tabla de una fila (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$columnas = recoge("columnas");

$columnasOk = false;

$columnasMinimo = 1;
$columnasMaximo = 200;

if ($columnas == "") {
    print "<p class=\"aviso\">No ha escrito el número de columnas.</p>\n\n";
} elseif (!is_numeric($columnas)) {
    print "<p class=\"aviso\">No ha escrito el número de columnas como número.</p>\n\n";
} elseif (!ctype_digit($columnas)) {
    print "<p class=\"aviso\">No ha escrito el número de columnas "
        . "como número entero positivo.</p>\n\n";
} elseif ($columnas < $columnasMinimo || $columnas > $columnasMaximo) {
    print "<p class=\"aviso\">El número de columnas debe estar entre "
    	. "$columnasMinimo y $columnasMaximo.</p>\n\n";
} else {
	$columnasOk = true;
}

if ($columnasOk) {
    print "<table class=\"conborde\">\n";
    print "<tbody>\n";
    print "<tr>\n";
    for ($i = 1; $i <= $columnas; $i++) {
        print "<td>$i</td>\n";
    }
    print "</tr>\n";
    print "</tbody>\n";
    print "</table>\n";
    print "\n";
}

?>
    <p><a href="for_3_1_1.php">Volver al formulario.</a></p>

    
  </body>
</html>