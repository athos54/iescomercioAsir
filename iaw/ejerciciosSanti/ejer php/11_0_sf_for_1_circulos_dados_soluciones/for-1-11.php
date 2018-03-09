<?php
/**
 * for (1) 11 - for-1-11.php
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Contar puntos. for (1). Sin formularios.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Contar puntos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$numero = rand(1,10);
$total = 0;

if ($numero == 1) {
    print "  <h2>$numero dado</h2>\n";
} else {
    print "  <h2>$numero dados</h2>\n";
}
print "\n";
print "  <p>\n";
for ($i = 1; $i <= $numero; $i++) {
    $dado = rand(1, 6);
    print "    <img src=\"img/$dado.svg\" alt=\"$dado\" title=\"$dado\" width=\"140\" height=\"140\">\n";
    $total = $total+$dado;
}
print "  </p>\n";
print "\n";
print "  <p>El total de puntos obtenidos es <strong>$total</strong>.</p>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2017-10-10">10 de octubre de 2017</time></p>

    <p class="licencia">
      Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
      Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
      Sintes Marco</a>.<br />
      El programa PHP que genera esta página está bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
  </footer>
</body>
</html>
