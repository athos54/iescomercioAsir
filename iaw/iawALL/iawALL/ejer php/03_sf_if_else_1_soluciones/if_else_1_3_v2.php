<?php
/**
 * if ... else ... (1) 3 - if_else_1_3.php
  * @version   2016-10-09
 "*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Dos dados más altos. Juego. if .. elseif ... else ... (1)
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Juego: Dos dados más altos</h1>
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
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);

print "<td style=\"padding: 10px; background-color: red;\">\n";
print "  <img src=\"img/$dado1a.svg\" alt=\"Dado 1\" title=\"$dado1a\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "  <img src=\"img/$dado1b.svg\" alt=\"Dado 1\" title=\"$dado1b\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "</td>\n";
print "<td style=\"padding: 10px; background-color: blue;\">\n";
print "  <img src=\"img/$dado2a.svg\" alt=\"Dado 1\" title=\"$dado2a\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "  <img src=\"img/$dado2b.svg\" alt=\"Dado 1\" title=\"$dado2b\" width=\"140\" height=\"140\" style=\"background-color: red;\" />\n";
print "</td>\n";
#Si son pareja los dos se comprar la suma
$pareja1 = false;
$pareja2 = false;
if ($dado1a == $dado1b) $pareja1 = true;
if ($dado2a == $dado2b) $pareja2 = true;
$total1 = $dado1a + $dado1b;
$total2 = $dado2a + $dado2b;
if ($pareja1 && !$pareja2) 
    print "<td>Ha ganado el jugador 1</td>\n";
 elseif (! $pareja1 && $pareja2)  
    print "<td>Ha ganado el jugador 2</td>\n";
    else {
    if ($total1 > $total2) 
        print "<td>Ha ganado el jugador 1</td>\n";
     elseif ($total1 < $total2) 
        print "<td>Ha ganado el jugador 2</td>\n";
     else 
        print"<td>Han empatado</td>\n";
    
	}
?>
        </tr>
      </tbody>
    </table>

  </body>
</html>