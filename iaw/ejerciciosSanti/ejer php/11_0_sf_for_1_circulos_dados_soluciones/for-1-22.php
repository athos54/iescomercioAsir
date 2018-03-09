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
    print "<path fill=\"black\" stroke=\"white\" stroke-width=\"2\" "
. "d=\"m $x,$y 3.5,-1.1 3.0,-8.7 4.4,2.5 3.6,0.6 0.5,2.9 2.2,2.9 -2.2,3.1 "
. "-0.1,3.6 -3.3,0.2 -1.7,2.7 -4,-1.4 -3.9,0.2 -0.9,-4.2 -2.7,-2.6 1.7,-3.4 z\"/>\n";
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