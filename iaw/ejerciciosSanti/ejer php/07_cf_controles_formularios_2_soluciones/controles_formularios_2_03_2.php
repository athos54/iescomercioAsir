<?php
/**
 * Controles en formularios (2) 3-2 - controles_formularios_2_03_2.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 3 (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 3 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$sexo       = recoge("genero"); // El control no se llama sexo para evitar el proxy de Conselleria
$cine       = recoge("cine");
$literatura = recoge("literatura");
$musica     = recoge("musica");

$sexoOk       = false;
$cineOk       = false;
$literaturaOk = false;
$musicaOk     = false;

if ($sexo == "") {
    print "    <p class=\"aviso\">No ha indicado su sexo.</p>\n\n";
} elseif ($sexo != "hombre" && $sexo != "mujer") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $sexoOk = true;
}

if ($cine != "" && $cine != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $cineOk = true;
}

if ($literatura != "" && $literatura != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $literaturaOk = true;
}

if ($musica != "" && $musica != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $musicaOk = true;
}

if ($sexoOk && $cineOk && $literaturaOk && $musicaOk) {
    if ($sexo == "hombre") {
        print "    <p>Es un <strong>hombre</strong>.</p>\n";
    } else {
        print "    <p>Es una <strong>mujer</strong>.</p>\n";
    }
    print "\n";

    if ($cine == "on") {
        print "    <p>Le gusta <strong>el cine</strong>.</p>\n";
    }
    print "\n";

    if ($literatura == "on") {
        print "    <p>Le gusta <strong>la literatura</strong>.</p>\n";
    }
    print "\n";

    if ($musica == "on") {
        print "    <p>Le gusta <strong>la música</strong>.</p>\n";
    }
    print "\n";

    if ($cine != "on" && $literatura != "on" && $musica != "on") {
        print "    <p>No ha marcado ninguna afición.</p>\n";
    }
    print "\n";
}
?>
    <p><a href="controles_formularios_2_03_1.php">Volver al formulario.</a></p>

   
  </body>
</html>



http://www.mclibre.org/consultar
/php/ejercicios/con-formularios/
controles-formularios-2/
controles-formularios-2-03-2.php
?cine=on&musica=on