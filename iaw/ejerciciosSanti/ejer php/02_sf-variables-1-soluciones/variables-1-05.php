<?php
/**
 * Variables (1) 5 - variables-1-5.php
 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>La carta más alta. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>La carta más altaa</h1>

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
$maximo = max($a, $b, $c);

print "  <p>\n";
print "    <img src=\"img/c$a.svg\" alt=\"$a\" height=\"200\" />\n";
print "    <img src=\"img/c$b.svg\" alt=\"$b\" height=\"200\" />\n";
print "    <img src=\"img/c$c.svg\" alt=\"$c\" height=\"200\" />\n";
print "  </p>\n";
print "\n";
print "<p>La carta más alta es un <strong>$maximo</strong>.</p>\n";
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
