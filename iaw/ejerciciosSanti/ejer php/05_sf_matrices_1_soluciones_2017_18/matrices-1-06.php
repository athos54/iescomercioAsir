<?php
/** * Matrices (1) 6 - matrices-1-06.php */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Negación. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

<?php
$numero = rand(3, 10);
// Creamos la matriz de bits aleatorios
$inicial = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial[$i] = rand(0, 1);
}
// Mostramos los bits aleatorios
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "A: ";
for ($i = 0; $i < $numero; $i++) {
    print "$inicial[$i] ";
}
print "</p>\n";

// Creamos la matriz con los valores complementarios
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    if ($inicial[$i] == 1) {
        $resultado[$i] = 0;
    } else {
        $resultado[$i] = 1;
    }
}
/* Otra forma de calcular los valores complementarios
// Creamos la matriz con los valores complementarios
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    $resultado[$i] = 1 - $inicial[$i];
}
*/
// Mostramos los valores complementarios
print "\n";
print "<p style=\"font-size: 300%; font-family: monospace;\">";
print "<span style=\"text-decoration: overline\">A</span>: ";
for ($i = 0; $i < $numero; $i++) {
    print "$resultado[$i] ";
}
print "</p>\n";
?>

  
</body>
</html>
