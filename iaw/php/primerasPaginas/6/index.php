<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    // Escriba un programa que cada vez que se ejecute muestre un código de color RGB elegido al azar.
    // Un código de color puede tener el formato rgb(rojo, verde, azul), donde rojo, verde y azul son números
    // enteros entre 0 y 255.
    $rojo = rand(0,255);
    $verde = rand(0,255);
    $azul = rand(0,255);
    print "<div style='width:100px;height:100px;background-color:rgb($rojo,$verde,$azul)'>&nbsp</div>\n";
    print "Color: rgb($rojo,$verde,$azul)\n";
  ?>
</body>
</html>
