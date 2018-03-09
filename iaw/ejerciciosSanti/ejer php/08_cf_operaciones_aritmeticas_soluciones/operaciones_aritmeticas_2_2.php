<?php
/**
 * Operaciones aritmeticas 2-2 - operaciones_aritmeticas_2_2.php
 *
  */
?>
<!DOCTYPE html>
<html lang="es">
  <body>
    <h1>Convertidor de pies y pulgadas a centímetros (Resultado)</h1>

<?php
{$tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";return $tmp;}
$pies     = recoge("pies");
$pulgadas = recoge("pulgadas");

$piesOk     = false;
$pulgadasOk = false;

if ($pies == "") {
    print "<p class=\"aviso\">No ha escrito el número de pies.</p>\n\n";
} elseif (!ctype_digit($pies)) {
    print "<p class=\"aviso\">No ha escrito los pies como número entero positivo.</p>\n\n";
} else {
	$piesOk = true;
}

if ($pulgadas == "") {
    print "<p class=\"aviso\">No ha escrito el número de pulgadas.</p>\n\n";
} elseif (!is_numeric($pulgadas)) {
    print "<p class=\"aviso\">No ha escrito las pulgadas como número.</p>\n\n";
} elseif ($pulgadas < 0) {
    print "<p class=\"aviso\">Las pulgadas no pueden ser negativas.</p>\n\n";
} else {
    $pulgadasOk = true;
}

if ($piesOk && $pulgadasOk) {
    $centimetros = ($pies * 12 + $pulgadas) * 2.54;
    print "<p>$pies pies y $pulgadas pulgadas son $centimetros centímetros</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones_aritmeticas_2_1.php">Volver al formulario.</a></p>

    
    
  </body>
</html>