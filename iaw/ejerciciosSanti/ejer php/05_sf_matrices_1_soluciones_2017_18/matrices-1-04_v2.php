<?php
/**
 * Matrices (1) 4 - matrices-1-04.php*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Nombres de animales. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$dibujos = [
    "ballena.svg", "caballito-mar.svg", "camello.svg", "cebra.svg", "elefante.svg",
    "hipopotamo.svg", "jirafa.svg", "leon.svg", "leopardo.svg", "medusa.svg",
    "mono.svg", "oso.svg", "oso-blanco.svg", "pajaro.svg", "pinguino.svg",
    "rinoceronte.svg", "serpiente.svg", "tigre.svg", "tortuga-marina.svg", "tortuga.svg"
];

$animal = rand(0, count($dibujos) - 1);
$nom=substr($dibujos[$animal],0,-4);
print " <h2>$nom</h2>\n";
print "\n";
print "<p><img src=\"img/animales/$dibujos[$animal]\" alt=\"$nom\" title=\"$nom\" height=\"250\" /></p>\n";
?>

  
</body>
</html>
