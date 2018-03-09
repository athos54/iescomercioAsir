<?php
/**
 * Matrices 1 - matrices_1.php
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Matrices 1. Matrices (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Matrices 1</h1>

<?php
$numeroValores = rand(5, 15);
print "    <h2>Datos iniciales</h2>\n";
print "    <p>Número de valores en la matriz: $numeroValores</p>\n";
print "    <p>Valores elegidos al azar entre 0 y 10.</p>\n";
// Crea la matriz inicial
$matriz = array();
for ($i = 0; $i < $numeroValores; $i++) {
    $matriz[] = rand(0, 10);
}
print "    <h2>Matriz de valores</h2>\n";
print "    <pre>\n"; print_r($matriz); print "</pre>\n";

?>
    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-07">7 de noviembre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>