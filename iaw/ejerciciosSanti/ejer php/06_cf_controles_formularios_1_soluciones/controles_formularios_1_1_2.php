<?php
/**
 * Controles en formularios (1) 1-2 - controles_formularios_1_1_2.php
 *
 * @version   2016-10-24
  */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 1 (Resultado). Controles en formularios (1).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 1 (Resultado)</h1>

<?php
$nombre=$_REQUEST['nombre'];

print "<p>Su nombre es <strong>$nombre </strong>.</p>\n";


print "<p>Su nombre es <strong>".$_REQUEST['nombre']."</strong>.</p>\n";
print "<p>Su nombre es <strong>$_REQUEST[nombre]</strong>.</p>\n";

?>
    <p><a href="controles_formularios_1_1_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-24">24 de octubre de 2016</time></p>

    </footer>
  </body>
</html>
