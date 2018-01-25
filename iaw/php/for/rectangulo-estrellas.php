<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body{
      font-family: courier
    }
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
        transform: translate(-50%,-50%);
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
      }
      .numeros{
        /* position: relative; */
        position: absolute;
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


$ancho = rand(4,26);
$alto = rand(4,26);
?>
<!-- <pre> -->
  <div class="rectangulo-estrellas">
    <div class="numeros"><?=$ancho?><br><?=$alto?></div>
  <?php
  for($i=1;$i<=$alto;$i++){
    if($i==1 || $i==$alto){
      // primera linea y ultima linea
      for($k=1;$k<=$ancho;$k++){
        echo "* ";
      }
      echo "<br/>";
    }else{
      // resto
      print('* ');
      for($j=2;$j<$ancho;$j++){
        echo('&nbsp&nbsp');
      }
      print('*<br/>');
    }
  }
  ?>
  </div>
<!-- </pre> -->
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
