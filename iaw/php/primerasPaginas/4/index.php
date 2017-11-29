<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../2/estilos.css">

</head>
<body>
    <div class="cuadrado">
      <span class="resultado-del-dado">
        <?php
        $dado = rand(1,6);
        print $dado;
        ?>
      </span>
    </div>
</body>
</html>
