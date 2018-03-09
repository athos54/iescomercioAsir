<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio3</title>
  <link rel="stylesheet" href="styles.css">

</head>
<style media="screen">

</style>
<body>
  <div class="tabla-container tabla big centrar">
    <?php
      $numero1=rand(3,10);
      $numero2=rand(3,10);

      $mayor=max($numero1,$numero2);
      $menor=min($numero1,$numero2);


      for($i=0;$i<$menor;$i++){
        for($n=0;$n<$mayor;$n++){
          echo " *";
        }
        $mayor--;
        echo "<br>";
      }

      echo "<br><br><br>";
      echo "<span class='morado'>$numero1,$numero2</span>";
    ?>
  </div>

</body>
</html>
