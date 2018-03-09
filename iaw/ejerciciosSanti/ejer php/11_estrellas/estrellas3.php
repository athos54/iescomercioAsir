<html>
<table>
<?php
$tamaño=5;
print "<pre>\n";
for ($i=0;$i<$tamaño;$i++) {
	
	for ($i2=0;$i2<$tamaño;$i2++) {
		print "* ";
	}
	
print "\n";
}

for ($x=0;$x<$tamaño;$x++) {
	
	for ($x2=0;$x2<$tamaño;$x2++) {
		print "  ";
	}
	
	for ($x3=0;$x3<$tamaño;$x3++) {
		print "* ";
		
	}
	
print "\n";
}
print "</pre>\n";
?>
</table>
</html>