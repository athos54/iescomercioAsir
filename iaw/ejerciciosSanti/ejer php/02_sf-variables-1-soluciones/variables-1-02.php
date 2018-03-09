<?php
/**
 * Variables (1) 2 - variables-1-2.php
 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Círculo de color. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Círculo de color</h1>

  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php
$color = "rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ")";

print "<p>Color: $color</p>\n";
print "\n";
print "<svg width=\"100px\" height=\"100px\">\n";
print "<circle cx=\"50\" cy=\"50\" r=\"50\" fill=\"$color\" />\n";
print "  </svg>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-09-27">27 de septiembre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>
