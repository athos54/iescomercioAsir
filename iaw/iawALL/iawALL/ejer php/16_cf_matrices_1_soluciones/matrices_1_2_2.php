<?php
/**
 * Matrices 2-2 - matrices_2_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Matrices 2 (Resultado). Matrices (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Matrices 2 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

$numeroMinimo = recoge("numeroMinimo");
$numeroMaximo = recoge("numeroMaximo");
$valorMinimo  = recoge("valorMinimo");
$valorMaximo  = recoge("valorMaximo");

$valoresOk = false;

if ($numeroMinimo == "" || $numeroMaximo == "" || $valorMinimo == "" || $valorMaximo == "") {
    print "    <p class=\"aviso\">No ha escrito alguno(s) de los valores.</p>\n\n";
} elseif (!is_numeric($numeroMinimo) || !is_numeric($numeroMaximo) || !is_numeric($valorMinimo) || !is_numeric($valorMaximo)) {
    print "    <p class=\"aviso\">No ha escrito alguno(s) de los valores como número.</p>\n\n";
} elseif (!ctype_digit($numeroMinimo) || !ctype_digit($numeroMaximo) || !ctype_digit($valorMinimo) || !ctype_digit($valorMaximo)) {
    print "    <p class=\"aviso\">No ha escrito alguno(s) de los valores  como número entero.</p>\n\n";
} elseif ($numeroMinimo < 1 || $numeroMaximo < 1 || $valorMinimo < 0 || $valorMaximo < 0) {
    print "    <p class=\"aviso\">Alguno de los valores no está en el rango previsto.</p>\n\n";
} else {
    $valoresOk = true;
}

if ($valoresOk) {
    $numeroValores = rand($numeroMinimo, $numeroMaximo);

    print "    <h2>Datos iniciales</h2>\n";
    print "\n";
    print "    <p>Número de valores en la matriz: $numeroValores</p>\n";
    print "\n";
    print "    <p>Valores elegidos al azar entre $valorMinimo y $valorMaximo</p>\n";
    print "\n";

    // Crea la matriz inicial
    $matriz = array();
    for ($i = 0; $i < $numeroValores; $i++) {
        $matriz[] = rand($valorMinimo, $valorMaximo);
    }

    print "    <h2>Matriz de valores</h2>\n";
    print "\n";
    print "    <pre>\n"; print_r($matriz); print "</pre>\n";
    print "\n";
}

?>
    <p><a href="matrices_1_2_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-07">7 de noviembre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>
