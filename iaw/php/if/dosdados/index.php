
<?php
//Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al azar y diga si ha salido una pareja de valores iguales o el mayor de los valores obtenidos.

$dado1 = rand(1,6);
$dado2 = rand(1,6);

print "Dado 1: $dado1, Dado 2: $dado2";

if($dado1 > $dado2){
  print "<p>El dado 1 es mayor</p>";
}elseif($dado1 < $dado2){
  print "<p>El dado 2 es mayor</p>";
}else{
  print "<p>Los dados son iguales</p>";
}
?>
