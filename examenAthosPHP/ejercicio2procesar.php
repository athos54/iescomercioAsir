<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ejercicio 2 procesar</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="tabla-container tabla">


<?php
  include "verbos-irregulares.php";

  for($i=0;$i<3;$i++){
    if( ($_POST["verbo".$i."espanol"]==$_POST["verbo".$i."ingles"])){
      if(isset($_POST["verbo".$i."check"])){
        echo "<span class='correcto'>Bien!! ".$irregularVerbs[$_POST['verbo'.$i.'espanol']][3]." es ".$irregularVerbs[$_POST['verbo'.$i.'ingles']][0]." en ingles</span>";
        echo "<br>";
      }else{
        echo "<span class='incorrecto'>Verbo $i incorrecto ".$irregularVerbs[$_POST['verbo'.$i.'espanol']][3]." no es ".$irregularVerbs[$_POST['verbo'.$i.'ingles']][0]." en ingles</span>";
        echo "<br>";
      }
    }else{
      if(isset($_POST["verbo".$i."check"])){
        echo "<span class='incorrecto'>Verbo $i incorrecto ".$irregularVerbs[$_POST['verbo'.$i.'espanol']][3]." no es ".$irregularVerbs[$_POST['verbo'.$i.'ingles']][0]." en ingles</span>";
        echo "<br>";
      }else{
        echo "<span class='correcto'>Bien!! ".$irregularVerbs[$_POST['verbo'.$i.'espanol']][3]." es ".$irregularVerbs[$_POST['verbo'.$i.'ingles']][0]." en ingles</span>";
        echo "<br>";
      }
    }
  }

echo "<a href='ejercicio2.php'>Volver</a>";

?>
</div>
</body>
</html>
