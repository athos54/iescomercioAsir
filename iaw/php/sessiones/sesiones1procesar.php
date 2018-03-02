<?php
session_start();

if($_POST['accion']=='restar'){
  $_SESSION['numero']--;
}elseif($_POST['accion']=='sumar'){
  $_SESSION['numero']++;
}else{
  $_SESSION['numero']=0;
}

header("Location: sesiones1.php");
