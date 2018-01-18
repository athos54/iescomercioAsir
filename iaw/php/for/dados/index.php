<link rel="stylesheet" href="styles.css">
<?php
function imprimirDado(&$totalSuma,&$valorMasAlto,&$numeroDeVecesQueSalioElMaximo){
  $numero=rand(1,6);
  if($valorMasAlto<$numero){
    $valorMasAlto=$numero;
    $numeroDeVecesQueSalioElMaximo=1;
  } elseif($valorMasAlto==$numero){
    $numeroDeVecesQueSalioElMaximo++;
  }
  $totalSuma=$totalSuma+$numero;
  return ('<td><div class="spiralContainer"><div class="spiral"><img src="'.$numero.'.svg"/></div></div></td>');

}


$numeroDeDados=rand(1,10);
$totalSuma=0;
$valorMasAlto=0;
echo "<table><tr>";
for($i=0;$i<$numeroDeDados;$i++){
  echo imprimirDado($totalSuma,$valorMasAlto,$numeroDeVecesQueSalioElMaximo);
}
echo "</tr>";
echo "<tr><td colspan='".$numeroDeDados."' style='text-align:center'>El total es ".$totalSuma."</td></tr>";
echo "<tr><td colspan='".$numeroDeDados."' style='text-align:center'>El valor mas alto es ".$valorMasAlto."</td></tr>";
echo "<tr><td colspan='".$numeroDeDados."' style='text-align:center'>Ha salido ".$numeroDeVecesQueSalioElMaximo."</td></tr></table>";


?>
