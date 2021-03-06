<?php
/**
 * Matrices (1) 8 - matrices-1-08.php
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>El bit más común. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición.</p>

<?php
$numero = 10;

// Creamos la primera matriz de bits aleatorios
$inicial1 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial1[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la primera matriz
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "A: ";
for ($i = 0; $i < $numero; $i++) {
    print "$inicial1[$i] ";
}
print "</p>\n";

// Creamos la segunda matriz de bits aleatorios
$inicial2 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial2[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la segunda matriz
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "B: ";
for ($i = 0; $i < $numero; $i++) {
    print "$inicial2[$i] ";
}
print "</p>\n";

// Creamos la tercera matriz de bits aleatorios
$inicial3 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial3[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la tercera matriz
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "C: ";
for ($i = 0; $i < $numero; $i++) {
    print "$inicial3[$i] ";
}
print "</p>\n";

// Creamos la matriz con el resultado
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    if ($inicial1[$i] + $inicial2[$i] + $inicial3[$i] > 1) {
        $resultado[$i] = 1;
    } else {
        $resultado[$i] = 0;
    }
}

// Mostramos los valores calculados
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "R: ";
for ($i = 0; $i < $numero; $i++) {
    print "$resultado[$i] ";
}
print "</p>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-10-13">13 de octubre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>
