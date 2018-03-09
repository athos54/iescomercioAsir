<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="tabla-container">
  <?php
    include "verbos-irregulares.php";

    for($i=0;$i<3;$i++){
      $indicesDeVerbosElegidos[$i]=rand(0,count($irregularVerbs)-1);
    }
    $indicesDeVerbosElegidosDesordenados=$indicesDeVerbosElegidos;
    shuffle($indicesDeVerbosElegidosDesordenados);

    echo "<form action='ejercicio2procesar.php' method='post'>";
    echo "<table width='300px' border='1'>";
    echo "<tr><th>Español</th><th>Ingles</th><th align='center'>¿Correcto?</th>";
    for($i=0;$i<3;$i++){
      $enEspanol=$irregularVerbs[$indicesDeVerbosElegidos[$i]][3];
      $enIngles=$irregularVerbs[$indicesDeVerbosElegidosDesordenados[$i]][0];

      echo "<input type='hidden' name='verbo".$i."espanol' value='$indicesDeVerbosElegidos[$i]'>";
      echo "<input type='hidden' name='verbo".$i."ingles' value='$indicesDeVerbosElegidosDesordenados[$i]'>";
      echo "<tr><td class='col'>$enEspanol</td><td>$enIngles</td><td align='center'><input type='checkbox' name='verbo".$i."check'></td>";

    }
    echo "<tr><td colspan='3' align='center'><input class='boton' type='submit'></td>";
    echo "</form>";



  ?>
</div>
</body>
</html>
