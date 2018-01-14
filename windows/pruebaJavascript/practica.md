# Práctica PO 0505 Servidor IIS+PHP

## Esquema de red

![esquema-de-red](esquema-de-red.png)

## Desarrollo

### Método Get

Capturamos los datos enviados por metodo get de un formulario.

Como podemos observar, obtenemos el cuerpo del html, incluido el codigo javascript.
![metodo-get-1](metodo-get-1.png)

![metodo-get-2](metodo-get-2.png)

Como se puede observar en la primera linea en rojo, la peticion se hace por metodo get, y podemos observar tanto en wireshark como en la captura de la web, los parametros pasados por url
![metodo-get-3](metodo-get-3.png)

![metodo-get-4](metodo-get-4.png)

### Método Post

En cambio, si modificamos el formulario y ponemos el metodo post, no se envian los parametros por url (aunque en ralidad se envian igualmente en las cabeceras del paquete.). La unica diferencia es que no se ven en la url del navegador.
![metodo-post-1](metodo-post-1.png)

![metodo-post-2](metodo-post-2.png)


![metodo-post-3](metodo-post-3.png)
