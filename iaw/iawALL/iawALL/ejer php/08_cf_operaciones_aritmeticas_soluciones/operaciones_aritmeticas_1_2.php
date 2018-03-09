<?php
/**
 * Operaciones aritmeticas 1-2 - operaciones_aritmeticas_1_2.php
   */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Índice de masa corporal (Resultado). Operaciones aritméticas.
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Índice de masa corporal (Resultado)</h1>

<?php
function recoge($var)
{$tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";return $tmp;}

$peso   = recoge("peso");
$altura = recoge("altura");

$pesoOk   = false;
$alturaOk = false;

if ($peso == "") {
    print "<p class=\"aviso\">No ha escrito su peso.</p>\n\n";
} else {
	$pesoOk = true;
}

if ($altura == "") {
    print "<p class=\"aviso\">No ha escrito su altura.</p>\n\n";
} else {
	$alturaOk = true;
}
if ($pesoOk && $alturaOk) {
    $imc = round($peso / pow($altura / 100, 2),0);
    print "<p>Con un peso de <strong>$peso kg</strong> y una altura de <strong>"
        . "$altura cm</strong>, su índice de masa corporal es <strong>$imc</strong>.</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones_aritmeticas_1_1.php">Volver al formulario.</a></p>
  </body>
</html>