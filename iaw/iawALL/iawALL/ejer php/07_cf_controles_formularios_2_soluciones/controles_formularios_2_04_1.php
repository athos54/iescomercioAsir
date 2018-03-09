<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Datos personales 4 (Formulario). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Datos personales 4 (Formulario)</h1>

    <form action="controles_formularios_2_04_2.php" method="get">
      <fieldset>
        <legend>Formulario</legend>

        <p>Indique su dirección de correo: <input type="email" name="correo" size="40" />

        <p>Confirme su dirección de correo: <input type="email" name="correo2" size="40" />

        <p>Indique si quiere recibir correos nuestros:
          <select name="recibir">
            <option value="-1">...</option>
            <option value="1">Sí</option>
            <option value="0">No</option>
          </select>
        </p>

        <p>
          <input type="submit" value="Enviar" />
          <input type="reset" value="Borrar" />
        </p>
      </fieldset>
    </form>

   
  </body>
</html>