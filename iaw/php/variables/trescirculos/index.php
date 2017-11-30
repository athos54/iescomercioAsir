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

  // Escriba un programa que cada vez que se ejecute muestre tres círculos
  // contiguos con un radio entre 50 y 150 píxeles, al azar.

    $tamanoCirculo1=rand(50,150);
    $circulo1Rojo=rand(0,255);
    $circulo1Verde=rand(0,255);
    $circulo1Azul=rand(0,255);
    $colorCirculo1="rgb($circulo1Rojo,$circulo1Verde,$circulo1Azul)";
    $posicionCirculo1=0;

    $tamanoCirculo2=rand(50,150);
    $circulo2Rojo=rand(0,255);
    $circulo2Verde=rand(0,255);
    $circulo2Azul=rand(0,255);
    $colorCirculo2="rgb($circulo2Rojo,$circulo2Verde,$circulo2Azul)";
    $posicionCirculo2=$tamanoCirculo1;

    $tamanoCirculo3=rand(50,150);
    $circulo3Rojo=rand(0,255);
    $circulo3Verde=rand(0,255);
    $circulo3Azul=rand(0,255);
    $colorCirculo3="rgb($circulo3Rojo,$circulo3Verde,$circulo3Azul)";
    $posicionCirculo3=$posicionCirculo2+$tamanoCirculo2;

    $anchuraLienzo=(($tamanoCirculo1*2)+($tamanoCirculo2*2)+($tamanoCirculo3*2))+40;
    $alturaLienzo = (max($tamanoCirculo1,$tamanoCirculo2,$tamanoCirculo3)*2)+40;
    $cy=max($tamanoCirculo1,$tamanoCirculo2,$tamanoCirculo3);

    print '<svg width="'.$anchuraLienzo.'" height="'.$alturaLienzo.'" style="background:grey" viewBox="-20 -20 '.$anchuraLienzo.' '.$alturaLienzo.'" version="1.1" xmlns="http://www.w3.org/2000/svg">';
    print '<circle stroke="black" stroke-width="4"  fill="'.$colorCirculo1.'" cx="'.$tamanoCirculo1.'" cy="'.$cy.'" r="'.$tamanoCirculo1.'"/>';
    print '<circle stroke="black" stroke-width="4"  fill="'.$colorCirculo2.'" cx="'.((($tamanoCirculo1*2)+$tamanoCirculo2)+4).'" cy="'.$cy.'" r="'.$tamanoCirculo2.'"/>';
    print '<circle stroke="black" stroke-width="4"  fill="'.$colorCirculo3.'" cx="'.((($tamanoCirculo1*2)+($tamanoCirculo2*2)+$tamanoCirculo3)+8).'" cy="'.$cy.'" r="'.$tamanoCirculo3.'"/>';
    print '</svg>';

  ?>

</body>
</html>
