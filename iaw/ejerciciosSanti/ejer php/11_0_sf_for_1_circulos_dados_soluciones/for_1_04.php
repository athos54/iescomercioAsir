<?php
/**
 * for (1) 1 - for_1_04.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
2016-10-06
*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Círculos de colores numerados. for (1)
Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Círculos de colores numerados</h1>

    <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
$circulos = rand(1,10);

if ($circulos == 1) {
    print "<h2>$circulos círculo</h2>\n";
} else {
    print "<h2>$circulos círculos</h2>\n";
}
print "\n";
print "<table class=\"conborde\">\n";
print "<tbody>\n";
print "<tr>\n";
for ($i = 0; $i < $circulos; $i++) {
    print "<td>\n";
    print "<svg width=\"70px\" height=\"70px\" font-size=\"45\">\n";
    print "<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"hsl(" . rand(1, 360) . ", 100%, 50%)\" />\n";
    print "<text x=\"35\" y=\"50\" text-anchor=\"middle\">" . rand(1, 8) . "</text>\n";
    print "</svg>\n";
    print "</td>\n";
}
print "</tr>\n";
print "</tbody>\n";
print "</table>\n";
?>

    <footer>
<p class="ultmod">
Última modificación de esta página:
<time datetime=2016-10-06">6 de octubre de 2016</time></p>

</footer>
  </body>
</html>