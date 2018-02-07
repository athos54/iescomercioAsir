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
    $jugadores=[];
    $numeroDeTiradas=rand(1,10);
    echo "<table><tr>";
    for($i=0;$i<$numeroDeTiradas;$i++){
      $jugadores["j1"]["tirada_".$i]["numero"]=rand(1,6);
      $jugadores["j2"]["tirada_".$i]["numero"]=rand(1,6);
      if($jugadores["j1"]["tirada_".$i]["numero"]>$jugadores["j2"]["tirada_".$i]["numero"]){
        $jugadores["j1"]["tirada_".$i]["win"]="si";
        $jugadores["j2"]["tirada_".$i]["win"]="no";
      }else if ($jugadores["j1"]["tirada_".$i]["numero"]<$jugadores["j2"]["tirada_".$i]["numero"]){
        $jugadores["j1"]["tirada_".$i]["win"]="no";
        $jugadores["j2"]["tirada_".$i]["win"]="si";
      }else{
        $jugadores["j1"]["tirada_".$i]["win"]="empate";
        $jugadores["j2"]["tirada_".$i]["win"]="empate";
      }
      echo "<td><img src='".$jugadores["j1"]["tirada_".$i]["numero"].".svg'/></td>";
    }
    echo "</tr><tr>";
    for($i=0;$i<$numeroDeTiradas;$i++){
      echo "<td><img src='".$jugadores["j2"]["tirada_".$i]["numero"].".svg'/></td>";
    }
    echo "</tr><tr>";

    for($i=0;$i<$numeroDeTiradas;$i++){
      if($jugadores["j2"]["tirada_".$i]["win"]=='si'){
        echo "<td>Jugador2</td>";
      }else if($jugadores["j1"]["tirada_".$i]["win"]=='si'){
        echo "<td>Jugador1</td>";
      }else{
        echo "<td>Empate</td>";
      }
    }
    echo "</tr></table>";
    
  ?>
</body>
</html>
