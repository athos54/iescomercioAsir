<?php
/**
 * Tabla de multiplicar con cabecera (Resultado) - for_3_4_2.php
 */
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tabla de multiplicar con cabecera (Resultado). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Tabla de multiplicar con cabecera (Resultado)</h1>

<?php
function recoge($var) {   $tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))        : ""; return $tmp;}

$numero = recoge("numero");

$numeroOk = false;

$numeroMinimo = 1;
$numeroMaximo = 100;

if ($numero == "") {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla.</p>\n\n";
} elseif (!is_numeric($numero)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla como número.</p>\n\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No ha escrito el tamaño de la tabla "
        . "como número entero positivo.</p>\n\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El tamaño de la tabla debe estar entre "
    	. "$numeroMinimo y $numeroMaximo.</p>\n\n";
} else {
	$numeroOk = true;
}

if ($numeroOk) {
    print "<table class=\"conborde\">\n";
    print "<tbody>\n";
    print "<tr>\n";
    print "<th>X</th>\n";
    for ($j = 1; $j <= $numero; $j++) {
        print "<th>$j</th>\n";
    }
    print "</tr>\n";

    for ($i = 1; $i <= $numero; $i++) {
        print "<tr>\n";
        print "<th>$i</th>\n";
        for ($j = 1; $j <= $numero; $j++) {
            print "<td>" . ($i * $j) . "</td>\n";
        }
        print "</tr>\n";
    }
    print "</tbody>\n";
    print "</table>\n";
    print "\n";
}

?>
    <p><a href="for_3_4_1.php">Volver al formulario.</a></p>

    
  </body>
</html>