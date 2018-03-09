<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 1</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>

  <form action="ejercicio1procesar.php" method="post">
    <div class="tabla-container">
    <table class="tabla">
    <?php
        $numeroDeRadios=10;

        for($i=0;$i<$numeroDeRadios;$i++){
          $aleatorio=rand(1,10);
          $numeroDeBoton=$i+1;
          echo "<tr>";
          echo "<td>Boton $numeroDeBoton (valor aleatorio: $aleatorio):</td> <td><input type='radio' name='opcion' value='$aleatorio'></td>";
          echo "</tr>";
        }
     ?>
     <tr>
       <td colspan="2">----------------------------------------</td>
     </tr>
     <tr>
       <td colspan="2" align='center'><input class="boton" type="submit" value="Enviar"></td>
     </tr>
   </table>
    </div>

 </form>
</body>
</html>
