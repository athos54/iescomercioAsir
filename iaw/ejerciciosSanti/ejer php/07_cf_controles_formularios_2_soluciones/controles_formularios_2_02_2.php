<?php
/**
 * Controles en formularios (2) 2-2 - controles_formularios_2_02_2.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 2 (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 2 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$edad = recoge("edad");
$peso = recoge("peso");

$edadOk = false;
$pesoOk = false;

if ($edad == "") {
    print "    <p class=\"aviso\">No ha escrito su edad.</p>\n\n";
} elseif (!is_numeric($edad)) {
    print "    <p  class=\"aviso\">No ha escrito su edad como número.</p>\n\n";
} elseif (!ctype_digit($edad)) {
    print "    <p class=\"aviso\">No ha escrito su edad como número entero.</p>\n\n";
} elseif ($edad < 5 OR $edad > 130) {
    print "    <p class=\"aviso\">Su edad no está entre 5 y 130 años.</p>\n\n";
} else {
    $edadOk = true;
}

if ($peso == "") {
    print "    <p class=\"aviso\">No ha escrito su peso.</p>\n\n";
} elseif (!is_numeric($peso)) {
    print "    <p  class=\"aviso\">No ha escrito su peso como número.</p>\n\n";
} elseif ($peso < 10|| $peso > 150) {
    print "    <p class=\"aviso\">Su peso no está entre 10 y 150 kilos.</p>\n\n";
} else {
    $pesoOk = true;
}

if ($edadOk AND $pesoOk) {
    print "    <p>Su edad es <strong>$edad</strong> años.</p>\n";
    print "\n";
    print "    <p>Su peso es <strong>$peso</strong> kilos.</p>\n";
    print "\n";
}
?>
    <p><a href="controles_formularios_2_02_1.php">Volver al formulario.</a></p>

   
  </body>
</html>