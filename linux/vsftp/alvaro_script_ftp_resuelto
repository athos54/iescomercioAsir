#!/bin/bash

###############################################################################################################################
###############################################################################################################################
#DESCRIPCIÓN:
# Script llamado ftp.sh que permita configurar el servidor vsftp con las siguientes opciones de menú.
# Únicamente debe salir al pulsar la opción 5. Al realizar cualquiera de las opciones volverá al menú anterior.
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
#NOTAS:
###############################################################################################################################
###############################################################################################################################


###############################################################################################################################
#INICIO DE FUNCIONES

function menuprincipal()
{
echo "1. Arrancar servidor ftp.";
echo "2. Parar servidor ftp.";
echo "3. Reiniciar servidor ftp.";
echo "4. Configurar servidor ftp";
echo "5. Salir.";

read -n1 -p "Por favor seleccione una opción [1 - 5]: " opcmenup;
}

function submenu()
{
echo "a. Usuario anónimo.";
echo "b. Usuarios locales.";
echo "c. Enjaular."
echo "d. Volver al menú anterior.";
read -n3 -p "Por favor, seleccione una opción: " opcsubm;
}

function usuanonimo()
{
 echo "i. Habilitar acceso anónimo.";
 echo "ii. Deshabilitrar acceso anónimo.";
 echo "iii. Volver al menú anterior.";
 read -p "Por favor, seleccione una opción: " opcusuanon;

}

function usulocales()
{
 echo "i. Permitir acceso a usuarios locales.";
 echo "ii. No permitir el acceso a usuarios locales.";
 echo "iii. Añadir usuario a permitir.";
 echo "iv. Eliminar acceso a usuario.";
 echo "v. Volver al menú anterior.";
 read -p "Por favor, seleccione una opción: " opcusulocal;
}

function enjaular()
{
 echo "i. Enjaular usuarios.";
 echo "ii. Desenjaular usuarios.";
 echo "iii. Volver al menú anterior.";
 read -p "Por favor,seleccione una opción: " opcjaula;
}

function borralinusu() # borra las líneas que permiten el acceso al servidor ftp sólo a determinados usuarios.
{
 lineacomp=`cat $archivo | grep -n "###PERMITIENDO SOLO A DETERMINADOS USARIOS" | cut -d":" -f1`;
 if [ -z $lineacomp ]
  then
	echo > /dev/null;
 else
	posini=$lineacomp;
	let posfin=$lineacomp+3;
	sed -i "$posini,$posfin d" $archivo;
 fi
}


#FIN DE FUNCIONES
###############################################################################################################################


###############################################################################################################################
#INICIO DE VARIABLES

archivo="/etc/vsftpd.conf";
mensaje="Debe reiniciar el servidor FTP para que los cambios sean efectivos.";
mensaenjaula="Los usuarios fueron ENJAULADOS con éxito";
mensadesenjaula="Los usuarios fueron DESENJAULADOS con éxito";

#FIN DE VARIABLES
###############################################################################################################################


###############################################################################################################################
#INICIO DE PROGRAMA

clear;
opcmenup=0;
while [ $opcmenup -ne 5 ]
do
	menuprincipal;
	case $opcmenup in
		1) echo; echo "Iniciando el servidor FTP";echo;
		   echo "Pulse una tecla para continuar..."; read;
		   /etc/init.d/vsftpd start;
		   /etc/init.d/vsftpd status | grep Active;
		   echo;
		   ;;
		2) echo; echo "Deteniendo el servidor FTP";echo;
		   echo "Pulse una tecla para continuar..."; read;
		   /etc/init.d/vsftpd stop;
		    /etc/init.d/vsftpd status | grep Active;
		   echo;
		   ;;
		3) echo; echo "Reiniciando el servidor FTP";echo;
		   echo "Pulse una tecla para continuar..."; read;
		   /etc/init.d/vsftpd reload;
		   /etc/init.d/vsftpd status | grep Active;
		   echo;
		   ;;
		4) echo;echo;
		   opcsubm=0;
		   while [ "$opcsubm" != "d" ]
		   do
			submenu;
			case "$opcsubm" in
				a) echo;echo "Usuarios Anónimos";echo;
				   opcusuanon=0
				   while [ "$opcusuanon" != "iii" ]
				   do
					usuanonimo;
					case "$opcusuanon" in
						i) echo;echo "Habilitando acceso anónimo";echo;
						   echo "Pulse una tecla para continuar..."; read;
						   sed -i 's/anonymous_enable=NO/anonymous_enable=YES/g' $archivo;
#						   cat /etc/vsftpd.conf | grep anonymous_enable;
						   borralinusu;
						   echo;echo $mensaje;echo;
						   ;;
						ii) echo;echo "Deshabilitando acceso anónimo";echo;
						   echo "Pulse una tecla para continuar..."; read;
						   sed -i 's/anonymous_enable=YES/anonymous_enable=NO/g' $archivo;
#						   cat /etc/vsftpd.conf | grep anonymous_enable;
						   borralinusu
						   echo;echo $mensaje;echo;
						   ;;
					esac
				   done
				   echo;
				   ;;
				b) echo; echo "Usuarios Locales";echo;
				   opcusulocal=0;
				   while [ "$opcusulocal" != "v" ]
				   do
					usulocales;
					case "$opcusulocal" in
                                                i) echo;echo "Permitiendo acceso a usuarios locales.";echo;
						   echo "Pulse una tecla para continuar..."; read;
						   sed -i 's/local_enable=NO/local_enable=YES/g' $archivo;
#						   cat /etc/vsftpd.conf | grep local_enable;
						   borralinusu;
						   echo;echo $mensaje;echo;
                                                  ;;
                                                ii) echo;echo "Impidiendo acceso a usuarios locales.";echo;
						    echo "Pulse una tecla para continuar..."; read;
						    sed -i 's/local_enable=YES/local_enable=NO/g' $archivo;
#						    cat /etc/vsftpd.conf | grep local_enable;
						    borralinusu;
						    echo;echo $mensaje;echo;
                                                  ;;
                                                iii) echo;echo "Añadiendo usuario a permitir.";echo;
						     echo "Pulse una tecla para continuar..."; read;
						     usuarios=`ls /etc | grep usuarios`;

						     if [ -z $usuarios ] # si no existe el archivo lo creo.
						      then
							 touch /etc/usuarios;
						     fi

						     read -p "Introduzca el nombre del usuario: " usuario;
					             usucomp=`cat /etc/usuarios | grep $usuario`;

						     if [ -z $usucomp ] # si el usuario no se encuentra en el archivo lo introduce, si ya se encuentra muestra mensaje.
	 					      then
							echo "$usuario" >> /etc/usuarios;
							echo;echo "El usuario $usuario fue añadido con éxito a los permitidos.";
						     else echo;echo "El usuario $usuario ya se encuentra entre los permitidos";
						     fi

						     lineacomp=`cat $archivo | grep "###PERMITIENDO SOLO A DETERMINADOS USARIOS"`;

						     if [ -z $lineacomp ]
	 					      then
							echo "###PERMITIENDO SOLO A DETERMINADOS USARIOS"  >> $archivo;
							echo "userlist_enable=YES" >> $archivo;
							echo "userlist_file=/etc/usuarios" >> $archivo;
							echo "userlist_deny=no" >> $archivo;
						     else
							echo /dev/null;
						     fi

						     echo;echo $mensaje;echo;
                                                   ;;
                                                iv) echo;echo "Eliminando acceso a usuario.";echo
                                                    echo "Pulse una tecla para continuar..."; read;
                                                    usuarios=`ls /etc | grep usuarios`;

                                                    if [ -z $usuarios ] # si no existe el archivo lo creo.
                                                     then
                                                       echo;echo "No hay ningún usuario configurado. No se puede eliminar.";echo;
						    else
                                                       read -p "Introduzca el nombre del usuario: " usuario;
                                                       usucomp=`cat /etc/usuarios | grep $usuario`;

                                                       if [ -z $usucomp ] # si el usuario no se encuentra en el archivo muestra mensaje, si se encuentra lo borra.
							then
                                                          echo;echo "El usuario $usuario no se encuentra entre los permitidos";echo;
                                                       else
							  sed -i "s/$usuario//g" /etc/usuarios;
							  sed -i '/^$/ d' /etc/usuarios; # borra las líneas en blanco del fichero, por si acaso estas produjeran fallo en el servidor..
							  echo "El usuario $usuario ha sido eliminado con éxito";
							  echo $mensaje;echo;
                                                       fi
                                                    fi
                                                   ;;
					esac
				   done
				   echo;
				   ;;
				c) echo;echo "Enjaulamiento";echo;
				   opcjaula=0
				   while [ "$opcjaula" != "iii" ]
				   do
					enjaular;
					case "$opcjaula" in
                                                i) echo;echo "Enjaulamiento de  usuarios.";echo;
						   echo "Pulse una tecla para continuar..."; read;

						   directiva=(`cat $archivo | grep chroot_local_user= | grep -v ^#`);
						   lineas=(`cat $archivo | grep -n chroot_local_user= | cut -d":" -f1`);
						   if [ -z ${directiva[*]} ] # si NO existe la directiva ${directiva[*]} es que está comentada.
						    then
					        # como pueden existir varias líneas que contienen la directiva chroot_local_user comentadas,
					        # creo un if que seleccione la última y la descomente, además tiene en cuenta que pueda existir una sóla línea.
						        if [ ${#lineas[*]} -gt 1 ]
						         then
						                num=${#lineas[*]};
						                let num=$num-1;
						                sed -i "${lineas[$num]} s/#chroot_local_user=YES/chroot_local_user=YES/g" $archivo;
						#               cat $archivo | grep chroot_local_user=;
								echo $mensaenjaula;
								echo $mensaje;echo;
						        else # si es 1 es que sólo hay una línea.
						                sed -i 's/#chroot_local_user=YES/chroot_local_user=YES/g' $archivo;
						#               cat $archivo | grep chroot_local_user=;
								echo $mensaenjaula;
								echo $mensaje;echo;
						        fi

						   else #SI existe la directiva ${directiva[*]}
						        if [ "${directiva[*]}" = "chroot_local_user=YES" ]
						         then
						                echo "Los USUARIOS ya se encuentran ENJAULADOS.";echo;
						        else
						                num=${#lineas[*]};
						                let num=$num-1;
						                sed -i "${lineas[$num]} s/chroot_local_user=NO/chroot_local_user=YES/g" $archivo;
						#               cat $archivo | grep chroot_local_user=;
								echo $mensaenjaula;
								echo $mensaje;echo;
						        fi
						   fi

                                                   ;;

                                                ii) echo;echo "Desenjaulamiento de usuarios.";echo;
						    echo "Pulse una tecla para continuar..."; read;

                                                   directiva=(`cat $archivo | grep chroot_local_user= | grep -v ^#`);
                                                   lineas=(`cat $archivo | grep -n chroot_local_user= | cut -d":" -f1`);
                                                   if [ -z ${directiva[*]} ] # si NO existe la directiva ${directiva[*]} es que está comentada.
                                                    then
                                                # como pueden existir varias líneas que contienen la directiva chroot_local_user comentadas,
                                                # creo un if que seleccione la última y la descomente, además tiene en cuenta que pueda existir una sóla línea.
                                                        if [ ${#lineas[*]} -gt 1 ]
                                                         then
                                                                num=${#lineas[*]};
                                                                let num=$num-1;
                                                                sed -i "${lineas[$num]} s/#chroot_local_user=YES/chroot_local_user=NO/g" $archivo;
                                                #               cat $archivo | grep chroot_local_user=;
                                                                echo $mensadesenjaula;
                                                                echo $mensaje;echo;
                                                        else # si es 1 es que sólo hay una línea.
                                                                sed -i 's/#chroot_local_user=YES/chroot_local_user=NO/g' $archivo;
                                                #               cat $archivo | grep chroot_local_user=;
                                                                echo $mensadesenjaula;
                                                                echo $mensaje;echo;
                                                        fi

                                                   else #SI existe la directiva ${directiva[*]}
                                                        if [ "${directiva[*]}" = "chroot_local_user=NO" ]
                                                         then
                                                                echo "Los USUARIOS ya se encuentran DESENJAULADOS.";echo;
                                                        else
                                                                num=${#lineas[*]};
                                                                let num=$num-1;
                                                                sed -i "${lineas[$num]} s/chroot_local_user=YES/chroot_local_user=NO/g" $archivo;
                                                #               cat $archivo | grep chroot_local_user=;
                                                                echo $mensadesenjaula;
                                                                echo $mensaje;echo;
                                                        fi
                                                   fi

                                                   ;;
					esac
				   done
				   echo;
				   ;;
			esac
		   done
		   echo;
		   ;;
	esac
done
clear;

#FIN DE PROGRAMA
###############################################################################################################################
