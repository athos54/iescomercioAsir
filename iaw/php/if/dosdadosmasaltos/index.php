<?php
// En este juego, gana el jugador que:
    // ha obtenido una pareja de dados iguales de mayor valor, si los dos han obtenido parejas distintas
    // ha obtenido una pareja de dados iguales, si el otro jugador no ha obtenido pareja
    // ha obtenido una puntuación total mayor, si ningún jugador ha obtenido pareja

    $jugador1[1]=rand(1,6);
    $jugador1[2]=rand(1,6);
    $jugador2[1]=rand(1,6);
    $jugador2[2]=rand(1,6);

    $jugador1[0]=$jugador1[1]+$jugador1[2];
    $jugador2[0]=$jugador2[1]+$jugador2[2];

    echo "jugador1 ($jugador1[1],$jugador1[2]). Total $jugador1[0]<br />";
    echo "jugador2 ($jugador2[1],$jugador2[2]). Total $jugador2[0]<br />";

    echo "<br />";

    if($jugador1[1]==$jugador1[2] && $jugador2[1]==$jugador2[2]){
       if($jugador1[0]>$jugador2[0]){
         print "<p>Jugador1 gana CON DOBLE PAREJA</p>";
       }elseif($jugador1[0]<$jugador2[0]){
         print "<p>Jugador2 gana CON DOBLE PAREJA</p>";
       }else{
         print "Empatan";
       }
    }elseif($jugador1[1]==$jugador1[2] && $jugador2[1]!=$jugador2[2]){
      print "<p>El jugador 1 ha ganado POR TENER PAREJA Y EL OTRO NO</p>";
    }elseif($jugador1[1]!=$jugador1[2] && $jugador2[1]==$jugador2[2]){
      print "<p>El jugador 2 ha ganado POR TENER PAREJA Y EL OTRO NO</p>";
    }else{
       if($jugador1[0]>$jugador2[0]){
         print "<p>Jugador1 gana</p>";
       }elseif($jugador1[0]<$jugador2[0]){
         print "<p>Jugador2 gana</p>";
       }else{
         print "Empatan";
       }
    }
?>
