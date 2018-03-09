<?php
/**
 * for (1) 2 - for_1_02.php
 *2016-10-06
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Círculos en columna. for (1)
Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Círculos en columna</h1>

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
for ($i = 0; $i < $circulos; $i++) {
    print "<tr>\n";
    print "<td>\n";
    print "<svg  width=\"70px\" height=\"70px\">\n";
    print "<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\" />\n";
    print "</svg>\n";
    print "</td>\n";
    print "</tr>\n";
}
print "</tbody>\n";
print "</table>\n";
?>

    <footer>
<p class="ultmod">
Última modificación de esta página:
<time datetime="2016-10-06">6 de octubre de 2016</time></p>

</footer>
  </body>
</html>