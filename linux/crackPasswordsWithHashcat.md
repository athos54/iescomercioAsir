# Crackear contraseñas con hashcat.

Lo primero que vamos a hacer es descargarnos hashcat desde la pagina oficial. Debemos prestar especial atencion a los requisitos (los drivers de la tarjeta grafica), ya que una mala configuracion hará que el rendimiento sea muchisimo menor.

[Descargar hashcat](https://hashcat.net/hashcat/)

![download-hashcat](assets/download-hashcat.png)

Ya podriamos usar hashcat, pero vamos a descargarnos hashcat-gui para no tener que ejecutar los comandos desde consola.

[Descargar hashcat-gui](https://hashkiller.co.uk/hashcat-gui.aspx)

![hashcat-gui](assets/hashcat-gui.png)

Abriremos hashcat-gui y en la parte inferior, seleccionaremos la ruta al hashcat


![configurar-hashcat-gui](assets/configurar-hashcat-gui.png)

Despues, para hacer un ataque por diccinario, seleccionaremos la pestaña wordlists y los añadiremos

![hashcat-dictionary](assets/hashcat-dictionary.png)

Despues de esto, volveremos a la pestaña hashcat, seleccionaremos el archivo donde estan los hashes (archivo shadow de linux) y lo añadiremos a input, seleccionaremos el archivo destino y lo añadiremos a output y pincharemos en I'm a hashkiller

![hashcat-low-performance](assets/hashcat-low-performance.png)

Como se puede ver en la imagen, nos da una alerta de que el sistema no esta funcionando del modo optimo. Más abajo, podemos comprobar que hashcat esta testeando 3740 hashes por segundo, algo que puede parecer mucho pero que no lo es.

Para solucionar esto, seguimos la recomendacion del mensaje de alerta, y vamos a añadir la opcion -O a hashcat.

Iremos a la pestaña `Custom Commands & sessions` y lo introduciremos ahi.


![hashcat-o-option](assets/hashcat-o-option.png)

Volveremos a la pestaña `straight/wordlist` y volveremos a iniciar el ataque

Como podemos ver en la siguiente imagen, ya no nos aparece el mensaje de alerta, y vemos que la velocidad de calculo de hashes se ha multiplicado por 10

![hashcat-high-performance](assets/hashcat-high-performance.png)

En la imagen podemos apreciar, como hashcat va recorriendo los diccionarios que le hemos puesto, y probando todas las combinaciones.

![hash-found](assets/hash-found.png)

En los dos primeros diccionarios no ha conseguido recuperar las contraseñas, pero en el tercero si. Lo podemos ver en la linea `Recovered`

El nombre del diccionario se llama spanish, vamos a ver lo que contiene.


![dictionary-spanish](assets/dictionary-spanish.png)

La contraseña estaba ahi.

> Nota: En un principio intente hacer el ataque por fuerza bruta, pero no era viable ya que se iba a demorar mucho mas del tiempo que tenia. Estuve como 15 minutos descargando diferentes diccionarios, de grupos de rock, palabras en español, nombres, apellidos etc etc. De esta manera, la contraseña la saque en menos de 2 minutos. Hay que considerar que era una contraseña extremadamente debil, y que uno de los primeros diccionarios tenia la clave.

Estos son los diccionarios que me descargue.


![dictionary-list](assets/dictionary-list.png)
