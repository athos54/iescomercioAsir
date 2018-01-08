# Tema 6 Prgramación de scripts

\# -> comentarios

Lo primero que tenemos que poner en un script es la shell que vamos a utilizar, esto se hace con `#!/bin/bash`

`Echo` > muestra por pantalla un string

`read` -> lee lo que el usuario introduzca
a esto se le puede poner `-s` que hace que no se vea lo que tecleas, `-n1` solo coge 1 digito

`shift` (igual que array_shift de php)

echo $* muestra todos los parametros pasados

echo $@ (esta la trata como vector) muestra todos los parametros pasados

echo $# muestra el numero de parametros pasados

echo $0 guarda el nombre del fichero

el comando ``set`` muestra las variables de entorno

con el comando export podemos crear nuestras propias variables de entorno

vectores -> array

ficheros1 = `ls`
ficheros1 = (`ls`) -> guarda el resultado en un array
