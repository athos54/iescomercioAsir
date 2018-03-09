<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Colores 3 (Formulario). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>
  <body>
    <h1>Colores 3 (Formulario)</h1>

    <form action="controles_formularios_1_8_2.php" method="get">
      <p>Elija los colores a cambiar:<br />
        Color de fondo de la página: <input type="color" name="fondo" value="#ffffff" /><br />
        Color de la letra de la página: <input type="color" name="letra" value="#000000" />
      </p>

      <p>
        <input type="submit" value="Enviar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

      </body>
</html>