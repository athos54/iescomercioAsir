<?php
$dado1A=rand(1,6);
$dado1B=rand(1,6);
$dado2A=rand(1,6);
$dado2B=rand(1,6);
$suma1=$dado1A+$dado1B;
$suma2=$dado2A+$dado2B;
print "<img src=img/$dado1A.svg width:140 height:140 style='border: 10px solid red';/>\n";
print "<img src=img/$dado1B.svg width:140 height:140 style='border: 10px solid red';/>\n";
print "<img src=img/$dado2A.svg width:140 height:140 style='border: 10px solid blue';/>\n";
print "<img src=img/$dado2B.svg width:140 height:140 style='border: 10px solid blue';/>\n";
$resultado='';
if ($dado1A == $dado1B AND $dado2A == $dado2B)
	if ($dado1A > $dado2A) 
		$resultado='Gana Jugador 1 . Pareja mas alta';
	elseif ($dado1A < $dado2A) 
		$resultado='Gana Jugador 2 . Pareja mas alta';
	else 
		$resultado='Empates . Parejas Iguales';	
elseif ($dado1A == $dado1B AND $dado2A <> $dado2B)
		$resultado='Gana Jugador 1 . Pareja';
elseif ($dado1A <> $dado1B AND $dado2A == $dado2B)
		$resultado='Gana Jugador 2 . Pareja';
else // aQUI Termino con las parejas
	if ($suma1 == $suma2)
		$resultado='Empates . suma Iguales';	
	elseif ($suma1 > $suma2)
		$resultado='Gana Jugador 1 . Mayor Suma';
	else 	
		$resultado='Gana Jugador 2 . Mayor Suma';
	
print "$resultado";	
?>