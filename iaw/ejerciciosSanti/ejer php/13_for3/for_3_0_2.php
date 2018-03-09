<?php
/**
 * Varios elementos (Resultado) - for_3_0_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Varios elementos (Resultado). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Varios elementos (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$numero = recoge("numero");

$numeroOk = false;

$numeroMinimo = 1;
$numeroMaximo = 200;

if ($numero == "") {
    print "<p class=\"aviso\">No ha escrito el número.</p>\n\n";
} elseif (!is_numeric($numero)) {
    print "<p class=\"aviso\">No ha escrito un número.</p>\n\n";
} elseif (!ctype_digit($numero)) {
    print "<p class=\"aviso\">No ha escrito un número entero positivo.</p>\n\n";
} elseif ($numero < $numeroMinimo || $numero > $numeroMaximo) {
    print "<p class=\"aviso\">El número debe estar entre "
    	. "$numeroMinimo y $numeroMaximo.</p>\n\n";
} else {
	$numeroOk = true;
}

if ($numeroOk) {
    print "<h2>Preformateado (&lt;pre&gt;)</h2>\n";
    print "\n";
    print "<pre>";
    for ($i = 1; $i <= $numero; $i++) {
        print "$i ";
    }
    print "</pre>\n";
    print "\n";

    print "<h2>Párrafos (&lt;p&gt;)</h2>\n";
    print "\n";
    for ($i = 1; $i <= $numero; $i++) {
        print "<p>$i</p>\n";
        print "\n";
    }
    print "\n";
    print "<h2>Lista sin ordenar (&lt;ul&gt;)</h2>\n";
    print "\n";
    print "<ul>\n";
    for ($i = 1; $i <= $numero; $i++) {
        print "<li>$i</li>\n";
    }
    print "</ul>\n";
    print "\n";

    print "<h2>Lista ordenada (&lt;ol&gt;)</h2>\n";
    print "\n";
    print "<ol>\n";
    for ($i = 1; $i <= $numero; $i++) {
        print "<li>$i</li>\n";
    }
    print "</ol>\n";
    print "\n";
}

?>
    <p><a href="for_3_0_1.php">Volver al formulario.</a></p>

    
  </body>
</html>