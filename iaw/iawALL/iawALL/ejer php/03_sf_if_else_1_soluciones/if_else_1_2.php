<?php
/**
 * if ... else ... (1) 2 - if_else_1_2.php
  * @version   2016-10-03
 "*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dado más alto. Juego. if .. elseif ... else ... (1)
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Juego: Dado más alto</h1>

    <p>Actualice la página para mostrar una nueva tirada.</p>

    <table>
<tbody>
  <tr>
<th>Jugador 1</th>
<th>Jugador 2</th>
<th>Resultado</th>
</tr>
<tr>
<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "<td style=\"padding: 10px; background-color: red;\"><img src=\"img/$dado1.svg\" alt=\"Dado 1\" title=\"$dado1\" width=\"140\" height=\"140;\" /></td>\n";
print "<td style=\"padding: 10px; background-color: blue;\"><img src=\"img/$dado2.svg\" alt=\"Dado 1\" title=\"$dado2\" width=\"140\" height=\"140;\" /></td>\n";

if ($dado1 > $dado2) 
    print "<td>Ha ganado el jugador 1</td>\n";
 elseif ($dado1 < $dado2) 
    print "<td>Ha ganado el jugador 2</td>\n";
 else 
    print "<td>Han empatado</td>\n";
?>
</tr>
</tbody>
</table>

    
  </body>
</html>