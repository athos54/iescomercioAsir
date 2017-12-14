<?php
//Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al azar y diga si ha salido una pareja de valores iguales o el mayor de los valores obtenidos.

$jugador1 = rand(1,6);
$jugador2 = rand(1,6);

// print "Dado 1: $jugador1, Dado 2: $jugador2";

if($jugador1 > $jugador2){
  print "<p>El jugador 1 ha ganado</p>";
}elseif($jugador1 < $jugador2){
  print "<p>El jugador 2 ha ganado</p>";
}else{
  print "<p>Han empagado</p>";
}
?>
