configurar el servidor vsftp para que sirva lo siguiente
ftp.profesores.comercio.es:
* crear 5 carpetas profesorN
* cada uno puede netrar en cualquiera, pero solo escribir en la suya y todos tienen que estar enjaulados en /home/profesores
* el acceso debe realizares a traves de ssl_implicito (990)
* no se permite el acceso anonimo

y otro ftp
  * ftp.alumnos.comercio.es enjaular en /home/alumnos
  * acceso anonimo permitido
  * por ssl explicito
  * los usuarios anonimos solo pueden descargar
  * los usuarios anonimos están enjaulados
  * carpeta /home/alumnos/materias/modulo1 -> solo profesor 1 puede subir
  * carpeta /home/alumnos/materias/modulo2 -> solo profesor 2 puede subir
  * carpeta /home/alumnos/materias/modulo3 -> solo profesor 3 puede subir
  * carpeta /home/alumnos/materias/modulo4 -> solo profesor 4 puede subir
  * carpeta /home/alumnos/materias/modulo5 -> solo profesor 5 puede subir
  * solo profesor uno puede crear nuevas carpetas en /home/alumnos/materias
  * cada profesor puede entrar en cualquiera pero solo puede ver y escribir en la suya
