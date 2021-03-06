<?php
/**
 * Controles en formularios (2) 14-2 - controles_formularios_2_14_2.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 6 (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 6 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$nombre      = recoge("nombre");
$apellidos   = recoge("apellidos");
$edad        = recoge("edad");
$peso        = recoge("peso");
$sexo        = recoge("genero"); // El control no se llama sexo para evitar el proxy de Conselleria
$estadoCivil = recoge("estadoCivil");
$cine        = recoge("cine");
$deporte     = recoge("deporte");
$literatura  = recoge("literatura");
$musica      = recoge("musica");
$tebeos      = recoge("tebeos");
$television  = recoge("television");

$nombreOk      = false;
$apellidosOk   = false;
$edadOk        = false;
$pesoOk        = false;
$sexoOk        = false;
$estadoCivilOk = false;
$cineOk        = false;
$deporteOk     = false;
$literaturaOk  = false;
$musicaOk      = false;
$tebeosOk      = false;
$televisionOk  = false;

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

if ($edad == "...") {
    print "    <p class=\"aviso\">No ha indicado su edad.</p>\n\n";
} elseif ($edad != "1" && $edad != "2" && $edad != "3" && $edad != "4") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $edadOk = true;
}

if ($peso == "") {
    print "    <p class=\"aviso\">No ha escrito su peso.</p>\n\n";
} elseif (!is_numeric($peso)) {
    print "    <p class=\"aviso\">No ha escrito el peso como número.</p>\n\n";
} elseif (!ctype_digit($peso)) {
    print "    <p class=\"aviso\">No ha escrito el peso como número entero.</p>\n\n";
} elseif ($peso > 250) {
    print "    <p class=\"aviso\">El peso es superior a 250 kg.</p>\n\n";
} else {
    $pesoOk = true;
}

if ($sexo == "") {
    print "    <p class=\"aviso\">No ha indicado su sexo.</p>\n\n";
} elseif ($sexo != "hombre" && $sexo != "mujer") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $sexoOk = true;
}

if ($estadoCivil == "") {
    print "    <p class=\"aviso\">No ha indicado su estado civil.</p>\n\n";
} elseif ($estadoCivil != "soltero" && $estadoCivil != "casado" && $estadoCivil != "otro") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $estadoCivilOk = true;
}

if ($cine != "" && $cine != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $cineOk = true;
}

if ($deporte != "" && $deporte != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $deporteOk = true;
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

if ($tebeos != "" && $tebeos != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $tebeosOk = true;
}

if ($television != "" && $television != "on") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $televisionOk = true;
}

if ($nombreOk && $apellidosOk && $edadOk && $pesoOk && $sexoOk && $estadoCivilOk &&
    $cineOk && $deporteOk && $literaturaOk && $musicaOk && $tebeosOk && $televisionOk) {
    print "    <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "    <p>Sus apellidos son <strong>$apellidos</strong>.</p>\n\n";
    print "\n";

    if ($edad == 1) {
        print "    <p>Tiene <strong>menos de 20 años</strong>.</p>\n";
    } elseif ($edad == 2) {
        print "    <p>Tiene <strong>entre 20 y 39 años</strong>.</p>\n";
    } elseif ($edad == 3) {
        print "    <p>Tiene <strong>entre 40 y 59 años</strong>.</p>\n";
    } else {
        print "    <p>Tiene <strong>60 o más años</strong>.</p>\n";
    }
    print "\n";

    print "    <p>Su peso es de <strong>$peso</strong> kg.</p>\n";
    print "\n";

    if ($sexo == "hombre") {
        print "    <p>Es un <strong>hombre</strong>.</p>\n";
    } else {
        print "    <p>Es una <strong>mujer</strong>.</p>\n";
    }
    print "\n";

    if ($estadoCivil == "soltero") {
        print "    <p>Su estado civil es <strong>soltero</strong>.</p>\n";
    } elseif ($estadoCivil == "casado") {
        print "    <p>Su estado civil es <strong>casado</strong>.</p>\n";
    } else {
        print "    <p>Su estado civil no es <strong>ni soltero ni casado</strong>.</p>\n";
    }
    print "\n";

    if ($cine != "on" && $deporte != "on" && $literatura != "on" &&
        $musica !="on" && $tebeos != "on" && $television != "on") {
        print "    <p class=\"aviso\">No ha marcado ninguna afición.</p>\n";
    } else {
        print "<p>Le gusta: ";
        if ($cine) {
            print "    <strong>el cine</strong>, ";
        }
        if ($deporte ) {
            print "    <strong>el deporte</strong>, ";
        }
        if ($literatura) {
            print "    <strong>la literatura</strong>, ";
        }
        if ($musica) {
            print "    <strong>la música</strong>, ";
        }
        if ($tebeos == "on") {
            print "    <strong>los tebeos</strong>, ";
        }
        if ($television == "on") {
            print "    <strong>la televisión</strong> ";
        }
        print "</p>\n";
        print "\n";
    }
}
?>
    <p><a href="controles_formularios_2_14_1.php">Volver al formulario.</a></p>

   
  </body>
</html>