<?php
ini_set('memory_limit', '-1');
?>
<form class="" action="3.php" method="post">

  <input type="number" name="numeroMinimoDeValores" value="">
  <hr>
  <input type="number" name="numeroMaximoDeValores" value="">
  <hr>
  <input type="number" name="valorMinimo" value="">
  <hr>
  <input type="number" name="valorMaximo" value="">
  <hr>
  Directo <input type="radio" name="orden" value="directo">
  Inverso <input type="radio" name="orden" value="inverso">
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
  $orden=$_REQUEST['orden'];

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

  if($orden=='directo'){
    sort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }elseif ($orden=='inverso') {
    rsort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }else {
    echo "No se ha seleccionado forma de ordenar";
  }

}else{
  echo 'Formulario NO enviado';
}


?>
