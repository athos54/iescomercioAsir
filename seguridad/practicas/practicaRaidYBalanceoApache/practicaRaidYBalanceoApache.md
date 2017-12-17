# Raid5

Lo primero que tendremos que hacer es añadir 3 discos a la máquina virtual.

![anadir-discos-vm](assets/markdown-img-paste-20171217124238412.png)

Ahora, en w2008, iremos a administración de discos y crearemos el raid 5

![creacion-raid-5](assets/markdown-img-paste-20171217124518195.png)

![raid-creado](assets/markdown-img-paste-20171217124642719.png)

Metemos información en el disco para las pruebas.

![meter-info-en-raid](assets/markdown-img-paste-20171217124902575.png)

Quitamos un disco de los del raid para provocar un fallo.

![quitar-disco](assets/markdown-img-paste-20171217125102792.png)

Ahora arrancamos el sistema, y podemos ver que seguimos teniendo los datos, aunque en el administrador de discos nos da un error de redundancia en el raid5. Tambien podemos comprobar que podemos seguir metiendo datos

![error-redundancia-raid5](assets/markdown-img-paste-20171217125524596.png)

Añadimos un nuevo disco a la vm para reparar el raid5

![disco-nuevo](assets/markdown-img-paste-2017121712572335.png)

Pincharemos con el boton derecho en uno de los discos del raid, y seleccionaremos reparar volumen

![reparar-raid](assets/markdown-img-paste-20171217125828265.png)

En este caso, solo tenemos un disco adicional, asi que nos saldra una ventana para elegir disco, pero en este caso solo tiendremos uno donde elegir.

![reparar-raid-2](assets/markdown-img-paste-20171217125915515.png)

Nos cogerá el disco y podremos comprobar que los vuelve a sincronizar, reparando asi el raid

# Redundancia apache

Vamos a configurar la tarjeta de red del servidor maestro

![red-maestro](assets/markdown-img-paste-20171217131202499.png)

Y tambien del servidor esclavo

![red-esclavo](assets/markdown-img-paste-20171217131317219.png)

Instalamos apache2 en los dos servidores y comprobamos si funciona en local, modificaremos las páginas por defecto para comprobar a que servidor estamos accediendo.

![web-maestro](assets/markdown-img-paste-20171217132449434.png)

![web-esclavo](assets/markdown-img-paste-2017121713250610.png)

Instalamos ucarp en las dos maquinas

![instalar-ucarp](assets/markdown-img-paste-20171217132618788.png)

Y configuramos los interfaces

![configuracion-ucarp-maestro](assets/markdown-img-paste-20171217134657267.png)

![configuracion-ucarp-esclavo](assets/markdown-img-paste-20171217134542769.png)

Si los dos servidores estan activos, vemos que poniendo la direccion ip 192.168.7.57 nos carga la pagina del maestro

![dos-servers-up](assets/markdown-img-paste-20171217134828463.png)

Si tiramos el servidor maestro, vemos que nos carga la pagina del esclavo

![solo-un-server-up](assets/markdown-img-paste-20171217134938499.png)

# Práctica voluntaria balanceo con pfsense

https://youtu.be/P38ZdFWS-ew
