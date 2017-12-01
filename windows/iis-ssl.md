# Instalacion y configuracion https en iis
 Una vez instalado el iis, nos meteremos en la configuracion de este e iremos a la seccion de certificados del servidor

![ certificado-servidor](certificado-servidor.png)

Crearemos un nuevo certificado autofirmado


![certificado-autofirmado](certificado-autofirmado.png)

Iremos rellenando los datos segun nos los pida, el primer paso es el nombre del certificado

![nombre-certificado](nombre-certificado.png)

Y veremos que se ha creado

![certificado-creado](certificado-creado.png)

Ahora creamos un sitio nuevo y en la configuracion del sitio nos aseguraremos de poner tipo `https` y seleccionar el certificado correspondiente.


![creando-sitio-ssl](creando-sitio-ssl.png)

Como vemos al acceder desde el cliente nos da una alerta de certificado (porque es autofirmado)

![error-certificado](error-certificado.png) 
