<?php
/**
 * Variables (1) 4 - variables-1-4.php
 
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Avance de ficha. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado = rand(1, 6);

print "  <p><img src=\"img/$dado.svg\" alt=\"$dado\" title=\"$dado\" width=\"140\" height=\"140\" /></p>\n";
print "\n";
print "  <p><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "    width=\"620\" height=\"120\" viewBox=\"-15 -15 620 120\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "    <rect x=\"0\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"50\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >1</text>\n";
print "    <rect x=\"100\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"150\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >2</text>\n";
print "    <rect x=\"200\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"250\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >3</text>\n";
print "    <rect x=\"300\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"350\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >4</text>\n";
print "    <rect x=\"400\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"450\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >5</text>\n";
print "    <rect x=\"500\" y=\"0\" width=\"100\" height=\"100\" stroke=\"black\" stroke-width=\"1\" fill=\"none\" />\n";
print "    <text x=\"550\" y=\"80\" text-anchor=\"middle\" font-size=\"80\" fill=\"lightgray\" >6</text>\n";
print "    <circle cx=\"" . (100 * $dado - 50) . "\" cy=\"50\" r=\"30\" stroke=\"black\" stroke-width=\"2\" fill=\"red\" />\n";
print "  </svg></p>\n";
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
