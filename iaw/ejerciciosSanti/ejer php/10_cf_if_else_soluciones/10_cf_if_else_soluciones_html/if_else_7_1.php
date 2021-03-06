<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Convertidor de centímetros a kilómetros, metros y centímetros (Formulario) if ... elseif ... else ...
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Convertidor de centímetros a kilómetros, metros y centímetros (Formulario)</h1>

    <form action="if_else_7_2.php" method="get">
      <p>Escriba una distancia en centímetros (0 &le; distancia &lt; 1.000.000.000)
        para convertirla a kilómetros, metros y centímetros.</p>

      <table>
        <tbody>
          <tr>
            <td><strong>Distancia:</strong></td>
            <td><input type="number" name="distancia" min="0" max="999999999" /> cm</td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Convertir" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-04">4 de noviembre de 2016</time></p>

      <p class="licencia">
        Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
        y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
        Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
    </footer>
  </body>
</html>
