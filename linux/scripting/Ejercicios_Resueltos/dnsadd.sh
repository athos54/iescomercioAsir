#!/bin/bash
clear
read -p "Introduzca la dirección IP del servidor dns: " dns

#Comprueba si la IP introducida es valida
dir_dns=(`echo $dns | tr "." " "`)

#Mira si se compone de 4 números
if [ ${#dir_dns[*]} -ne 4 ]
then
	echo -e "\e[0;34mLA IP INTRODUCIDA NO ES VÁLIDA. FINALIZANDO PROGRAMA\e[0;0m"
	exit
fi

#Mira si cada número está entre 0 y 255
for num in ${dir_dns[@]}
do
	if [ $num -lt 0 ] || [ $num -gt 255 ]
	then
		echo -e "\e[0;34mLA IP INTRODUCIDA NO ES VÁLIDA. FINALIZANDO PROGRAMA\e[0;0m"
		exit
	fi
done

#Mira si existe o no ese servidor dns. Se queda solo con el número de linea que lo contiene
existe=`grep -n "$dns" /etc/resolv.conf|cut -d":" -f1`
if [ $existe ]
then
	echo -e "\e[0;33mEl servidor dns ya existe.\n"
	read -n1 -p "Desea eliminarlo del fichero [S]/N: " elim
	if [ "$elim" == "S" ] || [ "$elim" == "s" ] || [ ! $elim ]
	then
		#Elimina esa línea del fichero
		`sed -i "$existe d" /etc/resolv.conf`
		echo -e "\n\e[0;34mDNS $dns Eliminado\e[0;0m"
	elif [ "$elim" == "N" ] || [ "$elim" == "n" ]
	then
		echo -e "\n\e[0;34mSe mantiene el servidor DNS $dns \e[0;0m"
	else
		echo -e "\n\e[0;34mLa opción seleccionada no ha sido válida. SE MANTIENE EL SERVIDOR DNS $dns \e[0;0m" 
	fi
else #Si no existe lo añade a /etc/resolv.conf
	echo "nameserver $dns" >> /etc/resolv.conf
	echo -e "\n\e[0;34m Servidor $dns añadido\e[0;0m"
fi

