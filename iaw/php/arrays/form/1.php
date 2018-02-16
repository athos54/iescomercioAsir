<?php

$cantidad=6;
$array=[];

for($i=0;$i<$cantidad;$i++){
    $array[$i]=rand(0,10);
}
echo "<pre>";
print_r($array);
echo "</pre>";
?>
