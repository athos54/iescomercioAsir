<?php
ini_set('memory_limit', '-1');
?>
<form class="" action="2.php" method="post">

  <input type="number" name="numeroMinimoDeValores" value="">
  <hr>
  <input type="number" name="numeroMaximoDeValores" value="">
  <hr>
  <input type="number" name="valorMinimo" value="">
  <hr>
  <input type="number" name="valorMaximo" value="">
  <hr>
  <input type="submit" name="submit" value="Mostrar">
  <input type="reset" name="reset" value="Borrar">
</form>
<?php
if($_REQUEST){
  echo 'Formulario enviado';
  echo '<hr>';
  $array=[];
  $numeroMinimoDeValores=$_REQUEST['numeroMinimoDeValores'];
  $numeroMaximoDeValores=$_REQUEST['numeroMaximoDeValores'];
  $valorMinimo=$_REQUEST['valorMinimo'];
  $valorMaximo=$_REQUEST['valorMaximo'];

  echo '$numeroMinimoDeValores: '.$numeroMinimoDeValores;
  echo '<hr>';
  echo '$numeroMaximoDeValores: '.$numeroMaximoDeValores;
  echo '<hr>';
  echo '$valorMinimo: '.$valorMinimo;
  echo '<hr>';
  echo '$valorMaximo: '.$valorMaximo;
  echo '<hr>';

  $cantidadDeNumeros=rand($numeroMinimoDeValores,$numeroMaximoDeValores);

  for($i=0;$i<$cantidadDeNumeros;$i++){
    $array[$i]=rand($valorMinimo,$valorMaximo);
  }

  echo "<pre>";
  print_r($array);
  echo "</pre>";

}else{
  echo 'Formulario NO enviado';
}


?>
