<?php
/**
 * Controles en formularios (2) 1-2 - controles_formularios_2_01_2.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 1 (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 1 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$nombre    = recoge("nombre");
$apellidos = recoge("apellidos");

$nombreOk    = false;
$apellidosOk = false;

if ($nombre == "") {
    print "    <p class=\"aviso\">No ha escrito su nombre.</p>\n\n";
} else {
    $nombreOk = true;
}

if ($apellidos == "") {
    print "    <p class=\"aviso\">No ha escrito sus apellidos.</p>\n\n";
} else {
    $apellidosOk = true;
}

if ($nombreOk && $apellidosOk) {
    print "    <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "    <p>Sus apellidos son <strong>$apellidos</strong>.</p>\n";
    print "\n";
}
?>
    <p><a href="controles_formularios_2_01_1.php">Volver al formulario.</a></p>

   
  </body>
</html>