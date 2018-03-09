<?php
/**
 * Sucesiones aritméticas 2 - for_1_2.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Sucesiones aritméticas (2). for (1).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Sucesiones aritméticas (2)</h1>

    <p>Valores generados por bucles que empiezan en 0 y suben de 1 en 1:</p>

<?php
print "<pre>\n";

for ($i = 0; $i < 10; $i++) {
    printf("%6d", $i + 2);
}
print "\n";

for ($i = 0; $i < 9; $i++) {
    printf("%6d", 2 * $i + 2);
}
print "\n";

for ($i = 0; $i < 10; $i++) {
    printf("%6d", 3 * $i + 5);
}
print "\n";

for ($i = 0; $i < 6; $i++) {
    printf("%6d", 5 * $i);
}
print "\n";

for ($i = 0; $i < 10; $i++) {
    printf("%6d", - 2 * $i + 8);
}
print "\n";

for ($i = 0; $i < 7; $i++) {
    printf("%6d", - 5 * $i + 40);
}
print "\n";

for ($i = 0; $i < 8; $i++) {
    printf("%6d", - 6 * $i - 7);
}
print "\n";

print "</pre>\n";
?>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-04">4 de noviembre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>