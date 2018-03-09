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

$nombres = [
    "Ballena", "Caballito de mar", "Camello", "Cebra", "Elefante",
    "Hipopótamo", "Jirafa", "León", "Leopardo", "Medusa",
    "Mono", "Oso", "Oso blanco", "Pájaro", "Pingüino",
    "Rinoceronte", "Serpiente", "Tigre", "Tortuga marina", "Tortuga"
];

$animal = rand(0, count($dibujos) - 1);

print "  <h2>$nombres[$animal]</h2>\n";
print "\n";
print "  <p><img src=\"img/animales/$dibujos[$animal]\" alt=\"$nombres[$animal]\" title=\"$nombres[$animal]\" height=\"250\" /></p>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-10-12">12 de octubre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>
