<?php
/**
 * Tabla de multiplicar (Resultado) - for_3_5_2.php
 */
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tabla de multiplicar (Resultado). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
    <style type="text/css">
      td { text-align: center; }
    </style>
  </head>

  <body>
    <h1>Tabla de multiplicar (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$filas    = recoge("filas");
$columnas = recoge("columnas");
$altura   = recoge("altura");
$anchura  = recoge("anchura");

$filasOk = $columnasOk = $alturaOk = $anchuraOk = false;

$filasMinimo   = $columnasMinimo = 1;
$alturaMinimo  = 30;
$anchuraMinimo = 50;
$filasMaximo   = $columnasMaximo = $alturaMaximo = $anchuraMaximo = 100;

if ($filas == "") {
    print "<p class=\"aviso\">No ha escrito el número de filas.</p>\n\n";
} elseif (!is_numeric($filas)) {
    print "<p class=\"aviso\">No ha escrito el número de filas como número.</p>\n\n";
} elseif (!ctype_digit($filas)) {
    print "<p class=\"aviso\">No ha escrito el número de filas "
        . "como número entero positivo.</p>\n\n";
} elseif ($filas < $filasMinimo || $filas > $filasMaximo) {
    print "<p class=\"aviso\">El número de filas debe estar entre "
    	. "$filasMinimo y $filasMaximo.</p>\n\n";
} else {
    $filasOk = true;
}

if ($columnas == "") {
    print "<p class=\"aviso\">No ha escrito el número de columnas.</p>\n\n";
} elseif (!is_numeric($columnas)) {
    print "<p class=\"aviso\">No ha escrito  el número de columnas como número.</p>\n\n";
} elseif (!ctype_digit($columnas)) {
    print "<p class=\"aviso\">No ha escrito el número de columnas "
        . "como número entero positivo.</p>\n\n";
} elseif ($columnas < $columnasMinimo || $columnas > $columnasMaximo) {
    print "<p class=\"aviso\">El número de columnas debe estar entre "
    	. "$columnasMinimo y $columnasMaximo.</p>\n\n";
} else {
    $columnasOk = true;
}

if ($altura == "") {
    print "<p class=\"aviso\">No ha escrito la altura de las filas.</p>\n\n";
} elseif (!is_numeric($altura)) {
    print "<p class=\"aviso\">No ha escrito la altura de las filas como número.</p>\n\n";
} elseif (!ctype_digit($altura)) {
    print "<p class=\"aviso\">No ha escrito la altura de las filas "
        . "como número entero positivo.</p>\n\n";
} elseif ($altura < $alturaMinimo || $altura > $alturaMaximo) {
    print "<p class=\"aviso\">La altura de las filas debe estar entre "
	    . "$alturaMinimo y $alturaMaximo.</p>\n\n";
} else {
    $alturaOk = true;
}

if ($anchura == "") {
    print "<p class=\"aviso\">No ha escrito la anchura de las columnas.</p>\n\n";
} elseif (!is_numeric($anchura)) {
    print "<p class=\"aviso\">No ha escrito la anchura de las columnas como número.</p>\n\n";
} elseif (!ctype_digit($anchura)) {
    print "<p class=\"aviso\">No ha escrito la anchura de las columnas "
        . "como número entero positivo.</p>\n\n";
} elseif ($anchura < $anchuraMinimo || $anchura > $anchuraMaximo) {
    print "<p class=\"aviso\">La anchura de las columnas debe estar entre "
    	. "$anchuraMinimo y $anchuraMaximo.</p>\n\n";
} else {
    $anchuraOk = true;
}

if ($filasOk && $columnasOk && $alturaOk && $anchuraOk) {
    print "<table class=\"conborde\" style=\"table-layout: fixed; border-collapse: collapse; width: " . ($anchura * ($columnas + 1)) . "px\">\n";
    print "<tbody>\n";
    print "<tr style=\"height: $altura" . "px\">\n";
    print "<th>X</th>\n";
    for ($j = 1; $j <= $columnas; $j++) {
        print "<th>$j</th>\n";
    }
    print "</tr>\n";

    for ($i = 1; $i <= $filas; $i++) {
        print "<tr style=\"height: $altura"."px\">\n";
        print "<th>$i</th>\n";
        for ($j = 1; $j <= $columnas; $j++) {
            print "<td>" . ($i * $j) . "</td>\n";
        }
        print "</tr>\n";
    }
    print "</tbody>\n";
    print "</table>\n";
    print "\n";
}

?>
    <p><a href="for_3_5_1.php">Volver al formulario.</a></p>

    
  </body>
</html>