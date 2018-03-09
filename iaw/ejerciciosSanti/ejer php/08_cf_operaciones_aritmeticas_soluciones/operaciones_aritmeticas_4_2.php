<?php
/** * Operaciones aritmeticas 4-2 - operaciones_aritmeticas_4_2.php */
?>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Convertidor de segundos a horas, minutos y segundos (Resultado). Operaciones aritméticas.
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Convertidor de segundos a horas, minutos y segundos (Resultado)</h1>

<?php
function recoge($var){$tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";return $tmp;}
$segundos = recoge("segundos");
$segundosOk = false;

if ($segundos == "") {
    print "<p class=\"aviso\">No ha escrito el número de segundos.</p>\n\n";
} else {
    $segundosOk = true;
}

if ($segundosOk) {
    $h = floor($segundos / 3600);
    $m = floor($segundos % 3600 / 60);
    $s = $segundos % 60;
    print "<p>$segundos segundos son $h horas, $m minutos y $s segundos</p>\n";
    print "\n";
}
?>
    <p><a href="operaciones_aritmeticas_4_1.php">Volver al formulario.</a></p>

    
    
  </body>
</html>