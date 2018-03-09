<?php
/**
 * Variables (1) 1 - variables-1-1.php
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title> Línea. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Línea</h1>

  <p>Actualice la página para mostrar una nueva línea.</p>

<?php
$longitud = rand(10, 750);

print "<p>Longitud: $longitud</p>\n";
print "<svg width=\"" . $longitud . "px\" height=\"10px\">\n";
// forma alternativa
//print "width=\"{$longitud}px\" height=\"10px\">\n";
print "<line x1=\"1\" y1=\"5\" x2=\"$longitud\" y2=\"5\" stroke=\"black\" stroke-width=\"10\" />\n";
print "</svg>\n";
?>

 
</body>
</html>
