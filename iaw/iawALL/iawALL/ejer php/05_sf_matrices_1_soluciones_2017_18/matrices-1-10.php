<?php
/**
 * Matrices (1) 10 - matrices-1-10.php
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>De binario a Gray. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Convertidor de binario a código de Gray</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su conversión a código de Gray.</p>

<?php
$numero = 10;

// Creamos la matriz de bits aleatorios
$inicial = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la matriz
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "B: ";
for ($i = 0; $i < $numero; $i++) {
    print "$inicial[$i] ";
}
print "</p>\n";

// Creamos la matriz con el código Gray
$resultado = [];
$resultado[0] = $inicial[0];
for ($i = 0; $i < $numero - 1; $i++) {
    if ($inicial[$i] == $inicial[$i+1]) {
        $resultado[$i+1] = 0;
    } else {
        $resultado[$i+1] = 1;
    }
}
// 2 forma Creamos la matriz con el código Gray
$resultado = [];
$resultado[0] = $inicial[0];
for ($i = 1; $i < $numero ; $i++) {
    if ($inicial[$i-1] == $inicial[$i]) {
        $resultado[$i] = 0;
    } else {
        $resultado[$i] = 1;
    }
}


// Mostramos los valores calculados
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "G: ";
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
