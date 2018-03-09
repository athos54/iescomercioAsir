<?php
/**
 * for (1) 22 - for_1_22.php
 *2016-10-04
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Diana. for (1)
Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Diana</h1>

    <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
print "    <p>\n";
print "<svg  \n";
print "width=\"400px\" height=\"400px\" viewBox=\"-200 -200 400 400\">\n";

for ($i = 0; $i < 4; $i++) {
    print "<circle cx=\"0\" cy=\"0\" r=\"" . (200 - 50 * $i) . "\" fill=\"red\"/>\n";
    print "<circle cx=\"0\" cy=\"0\" r=\"" . (200 - 50 * $i - 25) . "\" fill=\"#ddd\"/>\n";
}

$disparos = rand(1,10);
for ($i = 0; $i < $disparos; $i ++) {
    $x = rand(-180, 180);
    $y = rand(-180, 180);
	 print "<circle cx=\"$x\" cy=\"$y\" r=\"10\" />\n";
    }
print "</svg>\n";
print "    </p>\n";
print "\n";
print "    <h2>Estadísticas</h2>\n";
print "\n";
print "    <ul>\n";
print "<li>Número de disparos: <strong>$disparos</strong>.</li>\n";
print "    </ul>\n";
?>

    <footer>
<p class="ultmod">
Última modificación de esta página:
<time datetime="2016-10-04">4 de octubre de 2016</time></p>

</footer>
  </body>
</html>