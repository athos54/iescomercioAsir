<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script type="text/javascript">
    function comprobaciones(){
      this.comprobarSiTieneNumeros()
      this.comprobarEdad()
      this.comprobarSexo()
    }

    function comprobarSiTieneNumeros(){
      nombreValue = document.querySelector('#nombre').value

      if(nombreValue < 2){
        console.log('Tiene que ser mas largo')
      }

      if(!/^[A-Za-z\s]+$/.test(nombreValue)){
        console.log('Error en el nombre')
      }

    }

    function comprobarEdad(){
      edad = document.querySelector('#edad').value
      edad = parseInt(edad);
      if( edad < 1 || edad > 110){
        console.log('Edad incorrecta')
      }
    }

    function comprobarSexo(){
      sexo = document.getElementsByName('sexo')
      if (sexo[0].checked==false && sexo[1].checked == false ){
        console.log('Tienes que seleccionar sexo')
      }
    }
  </script>
</head>
<body>
  Nombre: <input type="text" name="nombre" id="nombre" />
  Edad: <input type="number" name="edad" id="edad" />
  Sexo:
  Hombre<input type="radio" name="sexo" value='Hombre' />
  Mujer<input type="radio" name="sexo" value='Mujer' />
  <button onclick="comprobaciones()">Enviar</button>
</body>
</html>
