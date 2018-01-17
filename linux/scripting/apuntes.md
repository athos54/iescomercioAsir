# Tema 6 Prgramación de scripts

\# -> comentarios

Lo primero que tenemos que poner en un script es la shell que vamos a utilizar, esto se hace con `#!/bin/bash`

`Echo` > muestra por pantalla un string

`read` -> lee lo que el usuario introduzca
a esto se le puede poner `-s` que hace que no se vea lo que tecleas, `-n1` solo coge 1 digito

`shift` (igual que array_shift de php)

echo $* muestra todos los parametros pasados

echo $@ (esta la trata como vector) muestra todos los parametros pasados

echo $# muestra el numero de parametros pasados

echo $0 guarda el nombre del fichero

el comando ``set`` muestra las variables de entorno

con el comando export podemos crear nuestras propias variables de entorno

vectores -> array

ficheros1 = `ls`

ficheros1 = (`ls`) -> guarda el resultado en un array

expr opera matematicamente

## if

para comparar se haria algo asi...

if **[** **]**

o

if test y algo que no se como...

```bash
#!/bin/bash
read -p "Introduzca un numero: " numero

if [ $numero -ge 0 ]
then
	echo -e "\nEl numero es mayor que cero"
elif [ loquesea ]
then
	#your code
else

	echo -e "\nEl numero es menor que cero"
fi

```

## case

 ```bash
#!/bin/bash
read -p "Introduce un numero: " numero

case $numero in
	1)
		echo "el numero es uno";
		;;
	2)
		echo "el numero es dos";
		;;
	3)
		....
	*)
		#esto es el else;
		;;
esac

 ```

 ejercicio de prueba

 ```bash
#!/bin/bash

# Enunciado
#
# Al ejecutarlo lo primero que haga es pedir la ruta completa a un archivo
# y una vez escrito el archivo que aparezca el siguiente menu:
#
# 1 borrar el archivo
# 2 mover archivo
# 3 copiar archivo
# Selecciona una opcion:

# Si selecciona la opcion 2 o 3 pedira ruta destino y ejecutara la accion
# No controlar errores

clear

read -p "Introduzca la ruta completa a un archivo: " archivo


if [ -d $archivo ]
then
	echo "Es un directorio"
else
	if [ -e $archivo ]
	then
		echo "1 Borrar archivo"
		echo "2 Mover archivo"
		echo "3 Copiar archivo"
		read -n1 -p "Selecciona una opcion: " numero

		case $numero in
			1)
			`rm $archivo`
			;;
			2)
			read -p "Introduce destino: " destino
			`mv $archivo $destino`
			;;
			3)
			read -p "Introduce destino:" destino
			`cp $archivo $destino`
			;;
		esac
	else
		echo "El archivo no existe"
	fi
fi

 ```

 $? indica si la ultima instruccion se ha ejecutado bien o no, 0 indica que la ejecucion esta ok,

 entrada estandar 0>

 salida estandar 1>

 errores 2>

 redireccionar salida estandar y errores a un archivo 2>&1>archivo

 ejercicio 2


 script que al ejecutar pida el nombre de una tarjeta de red, comprueba si existe la tarjeta, si no existe lo indica y acaba, y si existe me pide ip y mascara y la configura

 ejercicio 3

 ```bash
#!/bin/bash

#programa que al ejecutarlo muestre por pantalla lo siguiente:

#las ips del equipo son ....
#la puerta de enlace del equipo es ...
#los dns del equipo son ...

echo "1.- Mostrar ips"
echo "2.- Mostrar gw"
echo "3.- Mostrar Dns"

read -p "Elige una opción" numero

case $numero in
  1)
    numberOfIps=`ip address |grep -w inet |  sed 's|    inet||g' | cut -f 1 -d/ | wc -l`
    if [ "$numberOfIps" = "0" ]
    then
      echo "No hay ips marcial!!!!"
    else
      ip address |grep -w inet |  sed 's|    inet||g' | cut -f 1 -d/ | wc -l
    fi
    read -p "Presiona una tecla para volver" volver
  ;;
  2)
    numberOfGw=`route -n | grep UG |cut -f10 -d" " | wc -l`
    if [ "$numberOfGw" = "0" ]
    then
      echo "No hay gw marcial!!!!"
    else
      route -n | grep UG |cut -f10 -d" "
    fi
    read -p "Presiona una tecla para volver" volver
  ;;
  3)
    numberOfDns=`cat /etc/resolv.conf |grep nameserver|sed 's/nameserver //g'`
    if [ "$numberOfDns" = "0" ]
    then
      echo "No hay dns marcial!!!!"
    else
      cat /etc/resolv.conf |grep nameserver|sed 's/nameserver //g'
    fi
    read -p "Presiona una tecla para volver" volver
  ;;
esac

 ```

 `sed 's/^ *//g)'` quita todos los espacios del principio `^ *`
