<?php
define('ENESPANOL',3);

include "../irregulares/irregular_verbs_list.php";
$tiempos=[
  'presente',
  'pasado',
  'participio'
];

if($_GET){
  $tiempo=$_GET['tiempo'];
  $verbo=$_GET['verbo'];
  $respuestaCorrecta=$irregularVerbs[$verbo][$tiempo];
  if($_GET['respuesta']==$respuestaCorrecta){
    echo "Correcto";
  }else{
    echo "La respuesta correcta es $respuestaCorrecta";
  }
}
$tiempo=rand(0,2);
$verbo=rand(0,count($irregularVerbs));
?>

<form action="irregulares3.php" method="get">
  <p>
    <?php
    print "Cual es el $tiempos[$tiempo] de {$irregularVerbs[$verbo][ENESPANOL]}";
    ?>
    <input type="text" name="respuesta" value="">
    <input type="hidden" name="tiempo" value="<?php echo $tiempo;?>">
    <input type="hidden" name="verbo" value="<?php echo $verbo;?>">
  </p>

    <p><input value="Corregir" type="submit">
      <input value="Borrar" type="reset"></p>
    </form>
