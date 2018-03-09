<?php
/**
 * if ... else ... (1) 1 - if_else_1_1.php
 * @version   2016-10-03
 "*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dos dados. if .. elseif ... else ... (1)
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Dos dados</h1>

    <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "    <p>\n";
print "<img src=\"img/$dado1.svg\" alt=\"Dado 1\" title=\"$dado1\" width=\"140\" height=\"140\">\n";
print "<img src=\"img/$dado2.svg\" alt=\"Dado 2\" title=\"$dado2\" width=\"140\" height=\"140\">\n";
print "    </p>\n";
print "\n";

if ($dado1 == $dado2) {
    print "    <p>Ha sacado una pareja de $dado1.</p>\n";
} else {
    print "    <p>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".</p>\n";
}
?>

 </html>