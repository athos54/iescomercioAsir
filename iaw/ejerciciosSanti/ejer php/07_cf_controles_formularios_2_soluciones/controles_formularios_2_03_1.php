<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 3 (Formulario). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 3 (Formulario)</h1>

    <form action="controles_formularios_2_03_2.php" method="get">
      <p>Indique su sexo y aficiones:</p>

      <p><strong>Sexo:</strong>
        <label><input type="radio" name="genero" value="hombre" />Hombre</label>
        <label><input type="radio" name="genero" value="mujer" />Mujer</label></p>

      <p><strong>Aficiones:</strong>
        <label><input type="checkbox" name="cine" />Cine</label>
        <label><input type="checkbox" name="literatura" />Literatura</label>
        <label><input type="checkbox" name="musica" />Música</label>
      </p>

      <p>
        <input type="submit" value="Enviar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

   
  </body>
</html>