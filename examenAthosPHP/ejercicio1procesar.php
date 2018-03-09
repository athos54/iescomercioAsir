<style>
    .tabla-container{
    display:flex;
    align-items: center;
    justify-content: center;
    height: 90vh;
    border: 1px solid grey;
  }
  h2 .seleccionado{
    color: blue;
  }
  .seleccionado{
    font-size: 3em;
  }
</style>
<div class="tabla-container">
  <?php
    echo "<div><h2>El valor del numero marcado es <span class='seleccionado'>".$_POST['opcion']."</span></h2></div>";
   ?>

</div>
<div><p><a href='ejercicio1.php'>Volver</a></p></div>
