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




 ejercicio6

 ````bash
#!/bin/bash

# ejercicio 6: Script llamado usuarios.sh que le pasemos como parametro el nombre de un usuario y los grupos a los que pertenecera dicho usuario. Y hara lo siguiente:
# - Si el usuario ya existe lo indicara y finaliza.
# - Si alguno de los grupos no existe lo crea y lo indica por pantalla.
# - Preguntara el numero de usuarios a crear y creara tantos usuarios como se haya indicado añadiendole al final del nombre un numero a cada uno. Ej: Si
# el usuario era pepito creara pepito1, pepito2, pepito3...perteneciendo todos ellos a los grupos indicados.
# -Asignara como contraseña a cada usuario su mismo nombre

existsUser=`cat /etc/passwd |grep -w $1:|wc -l`

if [ "$existsUser" = "1" ]; then
  echo "El usuario existe"
  exit
else
  usuario=$1
  shift
  read -p "Cuantos usuarios quieres crear: " numberOfUsers
  for n in `seq 1 $numberOfUsers`
  do
    useradd $usuario$n -p"$usuario$n" -m -s /bin/bash
    echo -e "$usuario$n\n$usuario$n" | passwd $usuario$n
    for grupo in $*
    do
      existGroup=`cat /etc/group |grep $grupo: |wc -l`
      if [ "$existGroup" = "0" ]; then
        echo -e "\e[0;31mCreando grupo $grupo\e[0;37m"
        addgroup $grupo
      fi
      echo -e "\e[0;34mAñadiendo al usuario $usuario$n en el grupo $grupoe[0;37m"
      addgroup $usuario$n $grupo
    done
  done
fi

 ```

 ```bash

#leer un fichero linea a linea

fichero=$1
numeroDeLineas=`cat $fichero | wc -l`
echo "hay $numeroDeLineas lineas"

contador=0

for linea in `seq 1 $numeroDeLineas`
do
    let lineasAMostrar=$numeroDeLineas-$contador
    tail $fichero -n $lineasAMostrar | head -n 1
    echo ""
    let contador=$contador+1
done

 ```

 ```bash
#!/bin/bash

#al ejecutarlo pregutne la direccion dns
#comprueba si ese dns existe en el fichero correspondiente
#si no esta añadirlo
#y si esta debe indicarlo y pregunta si queremos mantenerlo o eliminarlo

read -p "Introduce el dns: " dns

primero=`echo $dns| cut -f1 -d"."`
segundo=`echo $dns| cut -f2 -d"."`
tercero=`echo $dns| cut -f3 -d"."`
cuarto=`echo $dns| cut -f4 -d"."`
echo $primero
echo $segundo
echo $tercero
echo $cuarto
if [ $primero -gt 255 ] || [ $segundo -gt 255 ] || [ $tercero -gt 255 ] || [ $cuarto -gt 255 ] || [ $primero -lt 0 ] || [ $segundo -lt 0 ] || [ $tercero -lt 0 || $cuarto -lt 0 ];then
  echo "Dns no valido"
  exit
fi


existe=`cat /etc/resolv.conf | grep $dns | wc -l`

if [ $existe -gt 0 ]
then
  read -p "El dns ya existe, quieres manternerlo o eliminarlo? M/E " accion
  if [ $accion = 'M' ]
  then
    echo "Vale, lo mantenemos"
    exit
  elif [ $accion = 'E' ]
  then
    echo 'eliminando dns'
    sed -i".bak" '/'$dns'/d' /etc/resolv.conf
  else
    echo "Accion invalida"
  fi
else
  echo 'Añadiendo dns'
  echo "nameserver $dns" >> /etc/resolv.conf
fi

 ```

```bash
#!/bin/bash
# Script que muestre el siguiente menú:
# 1.- Mostrar la tabla de enrutamiento.
# 2.- Añadir ruta estática.
# 3.- Eliminar ruta estática.
# 4.- Salir
# Carcaterísticas:
#  La primera opción mostrará en pantalla la tabla de enrutamiento del equipo, hasta que el usuario pulse intro, en cuyo caso volverá al menú.
#  La segunda opción solicitará la ruta a añadir: IP, máscara y tarjeta de salida y añadirá dicha ruta a la tabla de enrutamiento, para volver posteriormente al menú. Si la tarjeta de red no existe lo indicará y volverá al menú cuando el usuario pulse intro.
#  La tercera opción permitirá eliminar una ruta, solicitando: IP, máscara y tarjeta. Eliminado dicha ruta y volviendo de nuevo al menú.
#  Debe mostrarse el menú hasta que se seleccione la opción 4 de salir.

while [ "$tecla" != "4" ]; do
  clear
  echo "1.- Mostrar la tabla de enrutamiento."
  echo "2.- Añadir ruta estática."
  echo "3.- Eliminar ruta estática."
  echo "4.- Salir"
  echo ""
  read -p "Introduce una opcion: " tecla

  if [ $tecla -eq 1 ];then
    route -n
    read -n1 -p "Presiona una tecla para continuar..."
  elif [ $tecla -eq 2 ];then
    read -p "Introduce direccion de red: " red
    read -p "Introduce mascara: " mascara
    read -p "Introduce interface de salida: " interface
    echo ""
    echo "Añadiendo ruta estatica..."
    route add -net $red netmask $mascara dev $interface
    read -n1 -p "Presiona una tecla para continuar..."
  elif [ $tecla -eq 3 ];then
    read -p "Introduce direccion de red: " red
    read -p "Introduce mascara: " mascara
    read -p "Introduce interface de salida: " interface
    echo ""
    echo "Eliminando ruta estatica..."

    route del -net $red netmask $mascara dev $interface
    read -n1 -p "Presiona una tecla para continuar..."
  elif [ $tecla == 4 ];then
    echo "Saliendo..."
  else
    echo "Opcion invalida"
    read -n1 -p "Presiona una tecla para continuar..."
  fi

done

```


```bash
#!/bin/bash

#programa que al ejecutarlo muestre las tarjeta de red del equipo y nos pregunte
#la tarjeta a configurar una vez seleccionada una, preguntara la ip y mascara la configurara
#en el fichero oportuno. Tener en cuenta que dicha tarjeta puede estar ya configurada.

tarjetas=(`ip address |grep -n mtu|cut -d":" -f3`)

echo "Que tarjeta quieres configurar?"

let numeroDeElementos=${#tarjetas[*]}-1
for numero in `seq 0 $numeroDeElementos`
do
  echo $numero: ${tarjetas[$numero]}
done
read -p "Introduce la tarjeta que quieres: " tarjetaElegida

estaConfigurada=`cat /etc/network/interfaces |grep $tarjetaElegida |wc -l`

if [ $estaConfigurada -lt 0 ]; then
  echo "No existe, vamos a configurarla"
else
  lineaInicioDeLaTarjetaElegida=(`cat /etc/network/interfaces |grep -n -w $tarjetaElegida |cut -d":" -f1`)
  totalLineas=`cat /etc/network/interfaces |wc -l`
  let lineasAMostrarDesdeElFinal=$totalLineas-${lineaInicioDeLaTarjetaElegida[0]}+1
  lineasDeLasTarjetasPosterioresEnElArchivo=(`cat /etc/network/interfaces |tail -n $lineasAMostrarDesdeElFinal | grep -n auto |cut -d":" -f1`)
  let ultimaLineaDeLaTarjetaElegida=${lineasDeLasTarjetasPosterioresEnElArchivo[1]}-1
  let ultimaLineaABorrar=$lineaInicioDeLaTarjetaElegida+$ultimaLineaDeLaTarjetaElegida-1
  echo ultimaLineaABorrar
  if [ ! $ultimaLineaABorrar ];then
    sed -i "$lineaInicioDeLaTarjetaElegida,$ultimaLineaABorrar d" /etc/network/interfaces
  fi
  sed -i "$lineaInicioDeLaTarjetaElegida,$ d" /etc/network/interfaces

	read -p "Introduce la ip: " ip
  read -p "Introduce la mascara: " mascara

  echo "" >>/etc/network/interfaces
  echo "auto $tarjetaElegida" >>/etc/network/interfaces
  echo "iface $tarjetaElegida inet static" >>/etc/network/interfaces
  echo "        address $ip" >>/etc/network/interfaces
  echo "        netmask $mascara" >>/etc/network/interfaces
fi

```

```bash
#!/bin/bash

# Script llamado ftp.sh que permita configurar el servidor vsftp con las siguientes opciones de menú. Únicamente debe salir al pulsar la opción 5. Al realizar cualquiera de las opciones volverá al menú anterior.
# 1. Arrancar servidor ftp.
# 2. Parar servidor ftp
# 3. Reiniciar servidorftp.
# 4. Configurar servidor ftp:
  # a. Usuario anónimo:
    # i. Habilitar acceso anónimo.
    # ii. Deshabilitrar acceso anónimo.
    # iii. Volver al menú anterior.
  # b. Usuarios locales:
    # i. Permitir acceso a usuarios locales.
    # ii. No permitir el acceso a usuarios locales.
    # iii. Añadir usuario a permitir.
    # iv. Eliminar acceso a usuario.
    # v. Volver al menú anterior.
  # c. Enjaular:
    # i. Enjaular usuarios
    # ii. Desenjaular usuarios
    # iii. Volver al menú anterior
  # d. Volver al menú anterior.
# 5. Salir

while [ "$opcion" != "5" ]; do
  clear
  echo "1. Arrancar servidor ftp"
  echo "2. Parar servidor ftp"
  echo "3. Reiniciar servidorftp"
  echo "4. Configurar servidor ftp"
  echo "5. Salir"
  echo ""

  read -p "Introduce una opcion: " opcion
  echo ""
  case "$opcion" in
    "1")
      echo "Arrancando servidor ftp..."
      /etc/init.d/vsftpd start
      read -p "Pulsa una tecla para continuar" tecla
    ;;
    "2")
      echo "Parando servidor ftp..."
      /etc/init.d/vsftpd stop
      read -p "Pulsa una tecla para continuar" tecla

    ;;
    "3")
      echo "Reiniciando servidor ftp..."
      /etc/init.d/vsftpd restart
      read -p "Pulsa una tecla para continuar" tecla

    ;;
    "4")
      clear
      while [ "$menu2" != "d" ];do
        clear
        echo ""
        echo "a. Usuario anónimo: "
        echo "b. Usuarios locales: "
        echo "c. Enjaular: "
        echo "d. Volver al menu anterior: "
        read -p "Introduce una opcion menu2" menu2
        archivo="/etc/vsftpd.conf"
        case "$menu2" in
          "a")
            while [ "$menu3" != "iii" ];do
              clear
              echo $menu2
              echo ""
              echo "Menu a. Usuario anónimo:"
              echo ""
              echo "i. Habilitar acceso anónimo."
              echo "ii. Deshabilitrar acceso anónimo."
              echo "iii. Volver al menú anterior."
              read -p "Introduce opcion menu3: " menu3
              if [ "$menu3" == "i" ];then
                sed -i '/anonymous_enable/d' $archivo>/dev/null
                echo "anonymous_enable=yes">>$archivo
              elif [ "$menu3" == "ii" ];then
                sed -i '/anonymous_enable/d' $archivo>/dev/null
                echo "anonymous_enable=no">>$archivo
              else
                echo "Saliendo al menu anterior"
                menu3="limpiarvariable"
                break;
              fi
            done
          ;;
          "b")
            while [ "$menu4" != "v" ];do
              clear
              echo ""
              echo "Menu b. Usuarios locales: "
              echo ""
              echo "i. Permitir acceso a usuarios locales."
              echo "ii. No permitir el acceso a usuarios locales."
              echo "iii. Añadir usuario a permitir."
              echo "iv. Eliminar acceso a usuario."
              echo "v. Volver al menú anterior."

              read -p "Introduce opcion menu4: " menu4
              if [ "$menu4" == "i" ];then
                sed -i '/local_enable/d' $archivo>/dev/null
                sed -i '/userlist_enable/d' $archivo>/dev/null
                sed -i '/userlist_deny/d' $archivo>/dev/null
                echo "local_enable=yes">>$archivo
              elif [ "$menu4" == "ii" ];then
                sed -i '/local_enable/d' $archivo>/dev/null
                echo "local_enable=no">>$archivo
              elif [ "$menu4" == "iii" ];then
                sed -i '/local_enable/d' $archivo>/dev/null
                sed -i '/userlist_enable/d' $archivo>/dev/null
                sed -i '/userlist_deny/d' $archivo>/dev/null
                echo "local_enable=yes" >> $archivo
                echo "userlist_file=/etc/vsftpd.users" >> $archivo
                echo "userlist_enable=yes" >> $archivo
                echo "userlist_deny=no" >> $archivo
                read -p "Introduce usuario a permitir" usuario
                echo $usuario >> /etc/vsftpd.users
              elif [ "$menu4" == "iv" ];then
                read -p "Introduce usuario a denegar" usuario
                sed -i "/$usuario/d" /etc/vsftpd.users>/dev/null
              else
                echo "Saliendo al menu anterior"
                menu4='limpiarvariable'
                break
              fi
            done
          ;;
          "c")
            # menu5='algo'
            while [ "$menu5" != "iii" ];do
              clear
              echo $menu2
              echo "Menu c. Enjaular:"
              echo ""
              echo "i. Enjaular usuarios"
              echo "ii. Desenjaular usuarios"
              echo "iii. Volver al menú anterior"
              echo ""
              read -p "Introduce una opcion: " menu5


              if [ "$menu5" == "i" ];then
                sed -i "/chroot_list_enable/d" $archivo
                sed -i "/chroot_list_file/d" $archivo
                echo "chroot_list_enable=yes" >> $archivo
                echo "chroot_list_file=/etc/vsftpd.users" >> $archivo
                read -p "Introduce usuario: " usuario
                echo $usuario >> /etc/vsftpd.users

              elif [ "$menu5" == "ii" ];then
                read -p "Introduce usuario: " usuario
                sed -i "/$usuario/d" /etc/vsftpd.users
              else
                menu5="limpiarvariable"
                break
              fi
            done
          ;;
          "d")
            echo ""
            echo "Saliendo al menu anterior:"
            echo ""
          ;;
        esac
      done
      menu2='limpiarvariable'
    ;;
    "5")
        echo "Saliendo..."
        exit
    ;;
  esac
done

```
