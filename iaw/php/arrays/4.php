<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Animales. Matrices (1).
    Escribe tu nombre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>
<body>
  <h1>Animales</h1>
  <p>Actualice la página para mostrar un nuevo animal.</p>
<?php
$imagenes=["ballena.svg","caballito-mar.svg","camello.svg","cebra.svg","elefante.svg", "jirafa.svg",
"leon.svg", "medusa.svg","mono.svg", "oso.svg", "oso-blanco.svg", "pajaro.svg", "pinguino.svg",
"rinoceronte.svg", "serpiente.svg", "tigre.svg", "tortuga-marina.svg", "tortuga.svg"];
$numanimal=rand(0,count($imagenes)-1);
// echo $imagenes[$numanimal];
$nombre=substr($imagenes[$numanimal],0,-4);
echo "<strong>".ucfirst($nombre)."</strong><br>";
echo "<img src='img/animales/$imagenes[$numanimal]' width=120 height=120/>";
?>
</body>
</html>
