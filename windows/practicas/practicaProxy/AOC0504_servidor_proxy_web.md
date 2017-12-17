Lo primero descargaremos `ccproxy` desde su página oficial.

![download-ccproxy](assets/markdown-img-paste-20171217111603984.png)

Lo instalamos.

![instalacion-ccproxy](assets/markdown-img-paste-2017121711164830.png)

Ahora, tendremos que configurar una cuenta, pondremos el usuario (para diferenciar unos de otros), pondremos su direccion ip (también lo podemos hacer por mac), y pincharemos en el boton `E` que hay en webfilter

![configuracion-cuenta-ccproxy](assets/markdown-img-paste-20171217113027528.png)

En esta ventana configuraremos la url que no queremos permitir.

![configuracion-restriccion-ccproxy](assets/markdown-img-paste-20171217113305390.png)

Ahora reiniciaremos ccproxy

![reiniciar-ccproxy](assets/markdown-img-paste-20171217113420776.png)

En el cliente configuraremos el proxy con los siguientes datos

![configuracion-proxy-cliente](assets/markdown-img-paste-20171217113559209.png)

Y comprobaremos si podemos navegar a javierinformatica y a nuestra pagina desde el cliente 1

![prueba-proxy-cliente1](assets/markdown-img-paste-20171217115459637.png)

En ccproxy, añadiremos una nueva cuenta para el cliente2, esta vez, bloquearemos www.athos.com pero no javierinformatica

![prueba-proxy-cliente2](assets/markdown-img-paste-20171217115407217.png)

Como podemos comprobar, todas las peticiones del cliente van al puerto 808 que es el que configuramos en el proxy (en realidad no lo configuramos, es el que viene por defecto en ccproxy)

![wireshark-ccproxy](assets/markdown-img-paste-20171217120341464.png)

Nota: Si realizamos el proceso con una página https, no podremos verla ya que el certificado que nos da el servidor final (www.facebook.com en este ejemplo) no corresponde con el que nos da el servidor.

![https-ccproxy](assets/markdown-img-paste-2017121712080220.png)
