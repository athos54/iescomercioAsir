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
    // Escriba un programa que cada vez que se ejecute muestre un saludo a un tamaño elegido al azar entre 200% y 800%.
    $tamano = rand(200,800);
    print "<span style='position:absolute;margin-top:2rem;padding:2rem;border:2px solid black;font-size:$tamano%'>Saludo</span>";
  ?>
</body>
</html>
