<?php
/**
 * Matrices (1) 2 - matrices-1-02.php*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Dado. Matrices (1).
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado = rand(1, 6);

$nombre = ["", "uno", "dos", "tres", "cuatro", "cinco", "seis"];

print "  <p><img src=\"img/$dado.svg\" alt=\"$dado\" title=\"$dado\" width=\"140\" height=\"140\" /></p>\n";
print "\n";
print "  <p>Ha sacado un <strong>$nombre[$dado]</strong>.</p>\n";
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
