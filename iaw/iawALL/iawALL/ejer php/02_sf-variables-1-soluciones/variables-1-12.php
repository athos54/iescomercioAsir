<?php
/**
 * Variables (1) 12 - variables-1-12.php
 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tres cuadrados. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Tres cuadrados</h1>
<p>Actualice la página para mostrar tres nuevos cuadrados.</p>

<?php
$c1 = rand(50, 150);
$c2 = rand(50, 150);
$c3 = rand(50, 150);
$ancho = $c1 + $c2 + $c3 + 20;
$alto = max($c1, $c2, $c3) + 20;

print "<p><svg ";
print "width=\"$ancho\" height=\"$alto\"
		viewBox=\"-10 -10 $ancho $alto\"
		style=\"background-color: grey;\" 
		font-family=\"sans-serif\">\n";
print "<rect x=\"0\" y=\"0\"
		width=\"$c1\" height=\"$c1\" 
		fill=\"red\" />\n";
print "<rect x=\"$c1\" y=\"0\"
		width=\"$c2\" height=\"$c2\" 
		fill=\"green\" />\n";
print "<rect x=\"" . ($c1+$c2) . "\" y=\"0\"
		width=\"$c3\" height=\"$c3\"
		fill=\"blue\" />\n";
print "  </svg></p>\n";
?>

  <footer>
<p class="ultmod">
      Última modificación de esta página:
  <time datetime="2017-09-29">29 de septiembre de 2017</time></p>

<p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
  <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>
