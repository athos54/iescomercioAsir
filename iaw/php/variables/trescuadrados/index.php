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


    $tamanoCuadrado1=rand(50,150);
    $cuadrado1Rojo=rand(0,255);
    $cuadrado1Verde=rand(0,255);
    $cuadrado1Azul=rand(0,255);
    $colorCuadrado1="rgb($cuadrado1Rojo,$cuadrado1Verde,$cuadrado1Azul)";
    $posicionCuadrado1=0;

    $tamanoCuadrado2=rand(50,150);
    $cuadrado2Rojo=rand(0,255);
    $cuadrado2Verde=rand(0,255);
    $cuadrado2Azul=rand(0,255);
    $colorCuadrado2="rgb($cuadrado2Rojo,$cuadrado2Verde,$cuadrado2Azul)";
    $posicionCuadrado2=$tamanoCuadrado1;

    $tamanoCuadrado3=rand(50,150);
    $cuadrado3Rojo=rand(0,255);
    $cuadrado3Verde=rand(0,255);
    $cuadrado3Azul=rand(0,255);
    $colorCuadrado3="rgb($cuadrado3Rojo,$cuadrado3Verde,$cuadrado3Azul)";
    $posicionCuadrado3=$posicionCuadrado2+$tamanoCuadrado2;

    $anchuraLienzo=$tamanoCuadrado1+$tamanoCuadrado2+$tamanoCuadrado3+20;
    $alturaLienzo=max($tamanoCuadrado1,$tamanoCuadrado2,$tamanoCuadrado3)+20;

    print '<svg width="'.$anchuraLienzo.'" height="'.$alturaLienzo.'" style="background:grey" viewBox="-10 -10 '.$anchuraLienzo.' '.$alturaLienzo.'" version="1.1" xmlns="http://www.w3.org/2000/svg">';
    print "<rect x='".$posicionCuadrado1."px' width='".$tamanoCuadrado1."' height='".$tamanoCuadrado1."' style='fill:$colorCuadrado1' />";
    print "<rect x='".$posicionCuadrado2."px' width='".$tamanoCuadrado2."' height='".$tamanoCuadrado2."' style='fill:$colorCuadrado2' />";
    print "<rect x='".$posicionCuadrado3."px' width='".$tamanoCuadrado3."' height='".$tamanoCuadrado3."' style='fill:$colorCuadrado3' />";
    print '</svg>';

  ?>

</body>
</html>
