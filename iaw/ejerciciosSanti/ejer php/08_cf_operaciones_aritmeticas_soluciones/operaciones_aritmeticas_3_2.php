<?php
/**
 * Operaciones aritmeticas 3-2 - operaciones_aritmeticas_3_2.php
 *
  */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Convertidor de segundos a minutos y segundos (Resultado). Operaciones aritméticas.
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Convertidor de segundos a minutos y segundos (Resultado)</h1>

<?php
{$tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";return $tmp;}
$segundos = recoge("segundos");

$segundosOk = false;

if ($segundos == "") {
    print "<p class=\"aviso\">No ha escrito el número de segundos.</p>\n\n";
} elseif (!ctype_digit($segundos)) {
    print "<p class=\"aviso\">No ha escrito los segundos como número entero positivo.</p>\n\n";
} else {
    $segundosOk = true;
}

if ($segundosOk) {
	$min = floor($segundos / 60);
    $min = (int)($segundos / 60);
    $seg = $segundos % 60;
    print "<p>$segundos segundos son $min minutos y $seg segundos</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones_aritmeticas_3_1.php">Volver al formulario.</a></p>

    
    
  </body>
</html>