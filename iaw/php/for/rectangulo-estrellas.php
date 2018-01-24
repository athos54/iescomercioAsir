<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .rectangulo-estrellas{
        background: blue;
        display: inline-block;
        padding: 5px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        position: fixed;
        left:50vw;
        top:40vh;
      }

    </style>

  </head>
  <body>
<?php

// Ancho: 6
// Alto: 4
//
// * * * * * *
// *         *
// *         *
// * * * * * *


$ancho = 6;
$alto = 4;
?>
<div class="rectangulo-estrellas">
<?php
for($i=1;$i<=$alto;$i++){
  if($i==1 || $i==$alto){
    // primera linea y ultima linea
    for($k=1;$k<=$ancho;$k++){
      print "* ";
    }
    echo "<br/>";
  }else{
    // resto
    print('* ');
    for($j=1;$j<=$ancho;$j++){
      echo('&nbsp&nbsp');
    }
    print('* <br/>');
  }
}
?>
</div>
<?php
  $contador=0;
  $numero=200;
  for($t=0;$t<$numero;$t++){
    for($t1=0;$t1<$numero;$t1++){
      echo $contador++;
      echo $contador;
    }
    echo "<br/>";
  }

?>




</body>
</html>
