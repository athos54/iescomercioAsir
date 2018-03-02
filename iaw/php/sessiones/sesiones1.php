<?php
  session_start();

  if(!isset($_SESSION['numero'])){
    $_SESSION['numero']=0;
  }
 ?>

 <form class="" action="sesiones1procesar.php" method="post">
   <input type="submit" name="accion" value="restar">
   <?php
   echo $_SESSION['numero'];
    ?>
   <input type="submit" name="accion" value="sumar"><br>
   <input type="submit" name="accion" value="acero">

 </form>
