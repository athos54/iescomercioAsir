<?php
session_name('misesion');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>

  <div class="tabla-container tabla big centrar">

    <?php
    if(!isset($_SESSION['suma'])){
      $_SESSION['suma']=0;
      $_SESSION['ultimoNumero']=0;
    }

    // la @ es para que no me aparezca el warning
    if(@$_SESSION['ultimoNumero']!=0){
      echo "<img src='".$_SESSION['ultimoNumero'].".svg'/><br>";
    }
    echo "Llevamos acumulados ".$_SESSION['suma']."<br>";
    ?>

    <form class="" action="ejercicio4procesar.php" method="post">
      <input type="submit" name="accion" value="Enviar">
      <input type="submit" name="accion" value="Resetear">
    </form>
  </div>

</body>
</html>
