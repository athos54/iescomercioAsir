<?PHP

include ("recoge.php");

$numero1 = recoge("numero1");
$numero2 = recoge("numero2");

$numero1OK = false;
$numero2OK = false;

if ($numero1 == "") {print "Le falta introducir el numero 1";} 
	else
	{$numero1OK = true;}

if ($numero2 == "") {print "Le falta introducir el numero 2";} 
	else
	{$numero2OK = true;}

if ($numero1 == 0 or $numero2 == 0) {print "No admito el 0"; die;} 


if ($numero1OK == true && $numero2OK == true ){ 
	print "<p>Numero 1 es: $numero1</p>";
	print "<p>Numero 2 es: $numero2</p>";

if ($numero1 >= $numero2)
{$resto = $numero1 % $numero2; 
if ($resto == 0) 
	print "<p>$numero1 es multiplo de $numero2</p>";
	else 
	print "<p>$numero1 NO es multiplo de $numero2</p>";
	
;} 

if ($numero2 > $numero1) 
{$resto = $numero2 % $numero1; if ($resto == 0) {
	print "<p>$numero2 es multiplo de $numero1</p>";}
	else {
	print "<p>$numero2 NO es multiplo de $numero1</p>";}

;}
}
