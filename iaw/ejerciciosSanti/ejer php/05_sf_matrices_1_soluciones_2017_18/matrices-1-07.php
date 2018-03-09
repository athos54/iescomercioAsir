<?php
/**
 * Matrices (1) 7 - matrices-1-07.php */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>"Y" lógico. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>"Y" lógico</h1>
  <p>Actualice la página para mostrar dos secuencias aleatorias de bits y su conjunción lógica.</p>
<?php
$numero = rand(3, 10);
// Creamos la primera matriz de bits aleatorios
// Mostramos los bits aleatorios de la primera matriz
print "\n";
print "<pre style=\"font-size: 300%;\">\n";
print " A   : ";
$inicial1 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial1[$i] = rand(0, 1);
    print "$inicial1[$i] ";
}
print "\n";

// Creamos la segunda matriz de bits aleatorios
// Mostramos los bits aleatorios de la segunda matriz
print "\n";
print " B   : ";
$inicial2 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial2[$i] = rand(0, 1);
    print "$inicial2[$i] ";
}
print "\n";
// Mostramos los valores 
print "\n";
print "A and B: ";
for ($i = 0; $i < $numero; $i++) {
	$res=$inicial1[$i] * $inicial2[$i];
    print "$res ";
}
// o bien en dos pasos
// Creamos la matriz con el resultado de la conjunción lógica
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    if ($inicial1[$i] == 1 && $inicial2[$i] == 1 ) {
        $resultado[$i] = 1;
    } else {
        $resultado[$i] = 0;
    }
}
// Mostramos los valores calculados
print "\n";
print "A and B: ";
for ($i = 0; $i < $numero; $i++) {
    print "$resultado[$i] ";
}
print "</pre>\n";


?>

  
</body>
</html>
