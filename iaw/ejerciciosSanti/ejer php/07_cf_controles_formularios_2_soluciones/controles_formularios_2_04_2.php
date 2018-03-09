<?php
/**
 * Controles en formularios (2) 4-2 - controles_formularios_2_04_2.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 4 (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 4 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$correo  = recoge("correo");
$correo2 = recoge("correo2");
$recibir = recoge("recibir");

$correoOk  = false;
$correo2Ok = false;
$recibirOk = false;

if ($correo == "") {
    print "<p class=\"aviso\">No ha escrito su dirección de correo.</p>\n\n";
} elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    print "<p class=\"aviso\">No ha escrito una dirección de correo correcta.</p>\n\n";
} else {
    $correoOk = true;
}

if ($correo2 !== $correo) {
    print "    <p class=\"aviso\">Las direcciones de correo no coinciden.</p>\n\n";
} else {
    $correo2Ok = true;
}
if ($recibir == "-1") {
    print "<p class=\"aviso\">No ha indicado si desea recibir correo.</p>\n\n";
} elseif ($recibir != "0" && $recibir != "1") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $recibirOk = true;
}

if ($correoOk && $correo2Ok && $recibirOk) {
    print "    <p>Su dirección de correo es <strong>$correo</strong>.</p>\n";
    print "\n";
    if ($recibir == "0") {
        print "    <p><strong>No</strong> recibirá correos nuestros.</p>\n";
    } else {
        print "    <p><strong>Sí</strong> recibirá correos nuestros.</p>\n";
    }
    print "\n";
}
?>
    <p><a href="controles_formularios_2_04_1.php">Volver al formulario.</a></p>

   
  </body>
</html>