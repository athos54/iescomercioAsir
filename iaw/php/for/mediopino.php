<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style media="screen">
    body{
      font-family: courier;
      transition: 1s;
      display: flex;
      align-items: center;
      justify-content: space-around;
      height: 100vh;
      width: 100vw;
      background: rgb(157, 157, 157)

    }
    #first{
      border-radius: 50%;
      background: green;
      display: inline-block;
      transform: rotate('0deg');
    }
    #second{
      background: red;
      display: inline-block;
    }
  </style>
</head>
<body>
  <script>
    function izquierda(){
      let first = document.querySelector('#first')
      let anterior=first.style.transform;
      console.log(anterior)
      var total;
      if(anterior){
        let a = anterior.substr(7,anterior.indexOf('deg'))
        console.log('a',a);
        total=parseInt(a)+1
      }else{
        total=1;
      }
      first.style.transform = 'rotate('+total+'deg)'
    }

  </script>
<button onclick="izquierda()">izquierda</button>
<button onclick="derecha()">derecha</button>
<br>
<div id="first">
<?php
  $longitud=rand(3,20);

  for($i=0;$i<$longitud;$i++){
    for($i2=0;$i2<$longitud;$i2++){
      if($i<=$i2){
        echo " ";
      }else{
        echo "*";
      }
    }
    echo "<br>";
  }
?>
</div>
<?php
  echo "<br><br><br><br>";
?>
  <div id="second">
<?php
    $longitud=rand(3,20);

  for($i=0;$i<$longitud;$i++){
    for($i2=0;$i2<$longitud;$i2++){
      if($i<=$i2){
        echo "*";
      }else{
        echo " ";
      }
    }
    echo "<br>";
  }
?>
</div>

</body>
</html>
