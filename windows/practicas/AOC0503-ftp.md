Para añadir a un sitio web el servicio ftp, primero tendremos que añadir el servicio de rol.

![add-rol-service](add-rol-service.png)

Seleccionamos el servicio ftp y continuamos con el asistente.

![select-ftp-service](select-ftp-service.png)

Una vez hecho esto, podremos publicar un nuevo sitio ftp en las paginas que tengamos.

![add-ftp-publish](add-ftp-publish.png)

En este ejemplo, vamos a configurarlo sin ssl, asi que marcaremos la opcion.


![no-ssl](no-ssl.png)

Ahora configuraremos los usuarios que queremos que entren y sus permisos, en esta practica vamos a seleccionar usuarios anonimos con permisos de lectura y escritura, cosa que es totalmente desaconsejable.


![user-permissions](user-permissions.png)

Y podremos ver el mensaje de configuración correcta.

![ftp-config-done](ftp-config-done.png)

Ahora desde el cliente, nos conectamos por ftp y probamos a subir un fichero

![upload-file](upload-file.png)
