<?php
/**
 * Matrices (1) 9 - matrices-1-09.php
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Cambio de bits. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Cambio de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y la detección de cambios de bits consecutivos en la secuencia.</p>

<?php
$numero = 10;

// Creamos la matriz de bits aleatorios
$inicial = [];
// Mostramos los bits aleatorios de la matriz
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "A: ";

for ($i = 0; $i < $numero; $i++) {
    $inicial[$i] = rand(0, 1);
    print "$inicial[$i] ";
}
print "</p>\n";

// Creamos la matriz con la detección de los cambios
$resultado = [];
for ($i = 0; $i < $numero - 1; $i++) {
    if ($inicial[$i] == $inicial[$i+1]) {
        $resultado[$i] = 0;
    } else {
        $resultado[$i] = 1;
    }
}

// Mostramos los valores calculados
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "&Delta;A: ";
for ($i = 0; $i < $numero - 1; $i++) {
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
