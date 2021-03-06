<?php
/**
 * Matrices (1) 5 - matrices-1-05.php*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Partida de dados. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

<?php
$numero = rand(2, 7);
print "<h2>Jugador 1</h2>\n";
print "\n";
// Guardamos los valores del Jugador 1 en la matriz $dados1
$dados1 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados1[$i] = rand(1, 6);
}
// Mostramos los resultados obtenidos por el Jugador 1
print "<p>\n";
for ($i = 0; $i < $numero; $i++) {
    print "<img src=\"img/$dados1[$i].svg\" alt=\"$dados1[$i]\" title=\"$dados1[$i]\" width=\"140\" height=\"140\" />\n";
}
print "</p>\n";
print "<h2>Jugador 2</h2>\n";
print "\n";
// Guardamos los valores del Jugador 2 en la matriz $dados2
$dados2 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados2[$i] = rand(1, 6);
}
// Mostramos los resultados obtenidos por el Jugador 2
print "<p>\n";
for ($i = 0; $i < $numero; $i++) {
    print "<img src=\"img/$dados2[$i].svg\" alt=\"$dados2[$i]\" title=\"$dados2[$i]\" width=\"140\" height=\"140\" />\n";
}
print "</p>\n";
// En los acumuladores $gana1 $gana2 y $empate contamos cuántas partidas ha ganado cada uno
print "<h2>Resultado</h2>\n";
print "\n";

$gana1 = 0;
$gana2 = 0;
$empate = 0;
for ($i = 0; $i < $numero; $i++) {
    if ($dados1[$i] > $dados2[$i]) {
        $gana1++;
    } elseif ($dados1[$i] < $dados2[$i]) {
        $gana2++;
    } else {
        $empate ++;
    }
}

// Mostramos cuántas partidas ha ganado cada uno
print "<p>El jugador 1 ha ganado <strong>$gana1</strong> ve";
if ($gana1 != 1) {
    print "ces";
} else {
    print "z";
}
print ", el jugador 2 ha ganado <strong>$gana2</strong> ve";
if ($gana2 != 1) {
    print "ces";
} else {
    print "z";
}
print " y los jugadores han empatado <strong>$empate</strong> ve";
if ($empate != 1) {
    print "ces";
} else {
    print "z";
}
print ".\n";
print "\n";

// Mostramos quién ha ganado la partida
if ($gana1 > $gana2) {
    print "<p>En conjunto, ha ganado el jugador <strong>1</strong>.</p>\n";
} elseif ($gana1 < $gana2) {
    print "<p>En conjunto, ha ganado el jugador <strong>2</strong>.</p>\n";
} else {
    print "<p>En conjunto, han empatado.</p>\n";
}
?>

  
</body>
</html>
