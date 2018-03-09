<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Colores 2 (Formulario). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Colores 2 (Formulario)</h1>

    <form action="controles_formularios_1_7_2.php" method="get">
<p>Elija los colores a cambiar:<br />
<?php
$color = rand(0, 360);
print "<label><input type=\"checkbox\" name=\"fondo\" value=\"hsl($color, 100%, 90%)\" /> Color del fondo de la página</label><br />\n";
print "<label><input type=\"checkbox\" name=\"letra\" value=\"hsl($color, 100%, 30%)\" /> Color de la letra de la página</label>\n";
?>
</p>
<p>
	<input type="submit" value="Enviar" />
	<input type="reset" value="Borrar" />
</p>
</form>
  </body>
</html>