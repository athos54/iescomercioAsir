<?php
/**
 * Variables (1) 13 - variables-1-13.php
 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tres círculos. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Tres círculos</h1>

  <p>Actualice la página para mostrar tres nuevos círculos.</p>

<?php
$c1 = rand(50, 120);
$c2 = rand(50, 120);
$c3 = rand(50, 120);

$ancho = $c1*2 + $c2*2 + $c3*2 + 20;
$alto =  2 * max($c1, $c2, $c3) + 20;
$medio =   max($c1, $c2, $c3) ;
print "<p><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "width=\"$ancho\" height=\"$alto\"
     viewBox=\"-10 -10 $ancho $alto\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "<circle cx=\"$c1\" cy=\"$medio\" 
	r=\"$c1\" stroke=\"black\" 
	stroke-width=\"2\" fill=\"red\" />\n";
print "<circle cx=\"" . (2 * $c1 + $c2) . "\" cy=\"$medio\" r=\"$c2\" stroke=\"black\" stroke-width=\"2\" fill=\"green\" />\n";
print "<circle cx=\"" . (2 * $c1 + 2 * $c2 + $c3) ."\" cy=\"$medio\" r=\"$c3\" stroke=\"black\" stroke-width=\"2\" fill=\"blue\" />\n";
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
