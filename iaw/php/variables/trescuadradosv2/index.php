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
    require_once "class-cuadrados.php";

    $cuadrado1 = new Cuadrado();
    $cuadrado2 = new Cuadrado();
    $cuadrado3 = new Cuadrado();

    print '<svg width="500px" height="500px" viewBox="0 0 500px 500px" version="1.1" xmlns="http://www.w3.org/2000/svg">';
    print "<rect x='0px' width='".$cuadrado1->tamanoCuadrado."' height='".$cuadrado1->tamanoCuadrado."' style='fill:$cuadrado1->colorCuadrado' />";
    print "<rect x='".$cuadrado1->tamanoCuadrado."px' width='".$cuadrado2->tamanoCuadrado."' height='".$cuadrado2->tamanoCuadrado."' style='fill:$cuadrado2->colorCuadrado' />";
    print "<rect x='".($cuadrado1->tamanoCuadrado+$cuadrado2->tamanoCuadrado)."' width='".$cuadrado3->tamanoCuadrado."' height='".$cuadrado3->tamanoCuadrado."' style='fill:$cuadrado3->colorCuadrado' />";
    print '</svg>';

  ?>

</body>
</html>
