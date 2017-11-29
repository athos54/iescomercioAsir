# 5.1 acl
## setfacl
añadir modificar acls

## getfacl
mostrar acls y permisos de una carpeta o archivo

## mascara
afecta al grupo propietario, a los usuarios y grupos añadidos por la acl

se usa para quitar permisos de una forma rapida sin afectar los permisos ya configurados y poder volver a ellos rapidamente.

** ejemplo: asignar a la carpeta archivos los siguietnes permisos **
* el unico que puede hacer lo que desee incluso modificar sus permisos es el root

* el grupo asir2 unicamente puede leerla

`setfacl -m g:asir2:rx archivos`

* el grupo asir1 unicamente pude ver su contenido

`setfacl -m g:asir1:rx archivos`

* el grupo profesores puede hacer ver su contenido y modificarla

`setfacl -m g:profesores:rwx archivos`

la mascara para calcular los permisos efectivos hace una "and" entre los permisos de ese
usuario o grupo y la mascara, por ejemplo

asir1 r-x mascara --- = ---

para poner la mascara a 0 -> `setfacl -m m::- archivos`

despues de poner la mascara, si asignamos un nuevo permiso, la mascara se resetea

o dicho de otra forma: en cuanto modifique los permisos de algun usuario o grupo afectado por la mascara, esta se adecua eliminando los permisos efectivos.

# 5.2 Configuracion de un servidor ftp en linux
existen distintos servidores ftp en linux, proftpd, vsftp, filezilla server, pureftp

Un servidor ftp 'suele' funcionar por los puertos:
* 21 conexion
* 20 datos

un servidor ftp puede trabajar como servidor ftp activo o pasivo.

* activo fue la forma inicial, problema si el cliente tiene activado el firewall, para solucionar esto se invento el modo pasivo.


1. el cliente inicia una conexion con el servidor con puerto por encima del 1024 al puerto 21 del servidor
1. el servidor le manda datos a traves del puerto 20 al cliente. lo normal es que el firewall del cliente corte esa conexion de vuelta, ya que es por un puerto diferente al que el cliente inicio la conexion.


* pasivo para solucionar el problema del ftp activo.


1. en este caso el cliente se conecta al servidor, y en las dos ocasiones es el cliente el que abre las conexiones, a un puerto por encima del 1024 en el servidor en la segunda ocasion. El servidor debera tener RELATED en su firewall.


## Instalacion de vsftp
* aptitude install vsftpd

* el archivo de configuracion esta en /etc/vsftpd.config
* listen=yes -> esto quiere decir que no va en inet.d sino que va por su lado

> siempre directiva=opcion **sin espacios**

* vsftpd -> comprueba el archivo de configuracion en busca de errores

* local_enable=yes -> se trabaja con usuarios locales de linux aunque podria usarse usuarios de un servidor ldap o radius

* anonimous_enable=yes

* ftpd_banner="Bienvenido a tu servidor ftp"

## Cómo limitar el acceso a determinados usuarios
