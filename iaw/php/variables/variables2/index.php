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
    //Escriba un programa que cada vez que se ejecute muestre un círculo de 50px de radio y de un color elegido al azar.
    $rojo=rand(0,255);
    $verde=rand(0,255);
    $azul=rand(0,255);
    //rgb(205,133,63)
    $color="rgb($rojo,$verde,$azul)";
    print '<svg viewBox="0 0 50px 50px" version="1.1"
        xmlns="http://www.w3.org/2000/svg">
        <circle fill="'.$color.'" cx="60" cy="60" r="50"/>
      </svg>';
  ?>

</body>
</html>
