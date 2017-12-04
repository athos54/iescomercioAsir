1. Metemos los hashes en un archivo
![hash-to-file](hash-to-file.png)

2. ejecutamos el comando `john pass.practica.charo.voluntaria`

  ![running-john](running-john.png)

Si pulsamos cualquier tecla menos la q o ctrl+c veremos el estado por el que va el crackeo

![waiting](waiting.png)

Como vemos que va a tardar mucho, vamos a descargar un diccionario y probaremos con el, aunque como podemos ver, nos ha sacado una de las dos contraseñas

![pass-found](pass-found.png)

Vamos a intentar sacar la otra con ataque de diccionario.

![dictionary-webpage](dictionary-webpage.png)

Descargarmos el rockyou y podemos comprobar que tiene mas de 14 millones de contraseñas

![rockyou-wc](rockyou-wc.png)

Y ejecutaremos john de la siguiente forma

`john --wordlist=rockyou.txt pass.practica.charo.voluntaria`


![john-with-dictionary](john-with-dictionary.png)

Como vemos en la imagen anterior, john nos guarda la contraseña que saco anteriormente, si quisieramos verla tendriamos que usar el parametro `--show`

No hemos tenido suerte, no la ha sacado, tendriamos que probar con otros diccionarios.


![john-fail](john-fail.png)
