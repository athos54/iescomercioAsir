
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Tirada de dados. Variables.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" title=\"$dado1\" width=\"140\" height=\"140\" />\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" title=\"$dado2\" width=\"140\" height=\"140\" />\n";
print "  </p>\n";
print "\n";
print "  <p>Total: <span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">"
     . ($dado1 + $dado2) . "</span></p>\n";
?>

</body>
</html>
