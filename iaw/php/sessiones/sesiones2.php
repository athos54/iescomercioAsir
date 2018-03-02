<?php
session_start();

if(!isset($_SESSION['numero'])){
  $_SESSION['numero']=0;
}
?>
<style media="screen">
  .container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
</style>
<div class="container">
  <form class="" action="sesiones2procesar.php" method="post">
    <input type="submit" name="accion" value="izq">

    <input type="submit" name="accion" value="der"><br>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="600" height="20" viewBox="-300 0 600 20">
      <line x1="-300" y1="10" x2="300" y2="10" stroke="black" stroke-width="5"></line>
      <circle cx="<?php echo $_SESSION['numero'];?>" cy="10" r="8" fill="red"></circle>
    </svg>
    <br>
    <input type="submit" name="accion" value="centro">

  </form>

</div>
