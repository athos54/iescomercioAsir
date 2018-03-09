
<?php
$num = 5;
$ubicación = 'árbol';

$formato = 'Hay %d monos en el %s';
printf($formato, $num, $ubicación) ;
echo "<br>\n";

$formato = 'El %s contiene %d monos';
printf($formato, $num, $ubicación);
echo "<br>\n";

 #3 Intercambio de argumentos


printf('El %2$s contiene %1$d monos', $num, $ubicación);
echo "<br>\n";

 #4 Intercambio de argumentos

$formato = 'El %2$s contiene %1$d monos.
            Es un bonito %2$s con %1$d monos.';
printf($formato, $num, $ubicación);



?>





