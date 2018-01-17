<style>
.vueltas{
  background: red;
   -webkit-transform: translate(-50%, 0);
  /* position: absolute; */

  border-radius: 50%;
  -webkit-transition: -webkit-transform .8s ease-in-out;
          transition:         transform .8s ease-in-out;
}

.vueltas:hover {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}

</style>

<?php
function imprimirCirculo(){
  return ('<svg height="100" width="100">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
</svg>');
}

function imprimirEstrella(){
  return(' <div class="vueltas"><svg height="210" width="500">
  <polygon points="100,10 40,198 190,78 10,78 160,198"
  style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
</svg></div>');
}

echo "<table><tr>";
for($i=0;$i<10;$i++){
  echo "<td>".imprimirEstrella()."</td>";
}
echo "</tr></table>";
?>
