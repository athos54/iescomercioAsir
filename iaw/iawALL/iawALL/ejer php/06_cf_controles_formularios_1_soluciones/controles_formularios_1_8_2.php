<?php
/**
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Colores 3 (Resultado). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$fondo  = recoge("fondo");
$letra  = recoge("letra");

print "<style type=\"text/css\">body { background-color: $fondo; color: $letra; }</style>\n";
?>
  </head>
  <body>
    <h1>Colores 2 (Resultado)</h1>

    <p>Se han cambiado los colores elegidos.</p>
<p>El color del fondo es <?php $fondo ?></p>

	
	
    <p><a href="controles_formularios_1_8_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-24">24 de octubre de 2016</time></p>

    </footer>
  </body>
</html>
