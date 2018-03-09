<!DOCTYPE html>
<html>

<?php
$tamaño1=6;
$segmentos1=4;
$tamaño2=5;
$segmentos2=3;
print "<pre>\n";
for ($i = 0; $i < $segmentos1; $i++) {
	for ($x = 0; $x < $tamaño1; $x++){
		print "*";		
	}
	for ($y = 0; $y < $tamaño1; $y++){
		print " ";
	}
}
print "</pre>\n";

print "<pre>\n";
for ($i = 0; $i < $segmentos2; $i++) {
	for ($x = 0; $x < $tamaño2; $x++){
		print "*";		
	}
	for ($y = 0; $y < $tamaño2; $y++){
		print " ";
	}
}
print "</pre>\n";
?>
</html>