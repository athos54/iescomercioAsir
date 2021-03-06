<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Índice de masa corporal (Formulario). Operaciones aritméticas.
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Índice de masa corporal (Formulario)</h1>

    <form action="operaciones_aritmeticas_1_2.php" method="post">
      <p>Escriba su peso en kilogramos y su altura en centímetros para calcular
        su índice de masa corporal.</p>

      <table>
        <tbody>
          <tr>
            <td><strong>Peso:</strong></td>
            <td><input type="number" name="peso" min="1" /> kg</td>
          </tr>
          <tr>
            <td><strong>Altura:</strong></td>
            <td><input type="number" name="altura" min="1" /> cm</td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Calcular" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

    
    
  </body>
</html>
