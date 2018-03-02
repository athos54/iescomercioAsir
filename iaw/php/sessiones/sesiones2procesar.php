<?php
session_start();

if($_POST['accion']=='der'){
  echo "der";
  $_SESSION['numero']=$_SESSION['numero']+10;

}elseif($_POST['accion']=='izq'){
  echo "izq";
  $_SESSION['numero']=$_SESSION['numero']-10;
}else{
  $_SESSION['numero']=0;
}

if ($_SESSION['numero']>300){
  $_SESSION['numero']=$_SESSION['numero']-590;
}elseif ($_SESSION['numero']<-300){
  $_SESSION['numero']=$_SESSION['numero']+590;
}

header("Location: sesiones2.php");
