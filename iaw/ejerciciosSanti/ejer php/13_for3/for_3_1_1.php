<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Tabla de una fila (Formulario). for (3).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Tabla de una fila (Formulario)</h1>

    <form action="for_3_1_2.php" method="get">
      <p>Escriba un número (0 &lt; número &le; 200) y mostraré una tabla de una fila
        y tantas columnas como indique.</p>

      <table>
        <tbody>
          <tr>
            <td><strong>Número de columnas:</strong></td>
            <td><input type="text" name="columnas" min="1" max="200" value="10" /> </td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Mostrar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>
  </body>
</html>
