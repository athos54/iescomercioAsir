<?php
function imprimirCirculo(){
  return ('<svg height="100" width="100">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
</svg>');
}


echo "<table><tr>";
for($i=0;$i<10;$i++){
  echo "<td>".imprimirCirculo()."</td>";
}
echo "</tr></table>";
?>
