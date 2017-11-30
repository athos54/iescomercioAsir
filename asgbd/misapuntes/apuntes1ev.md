# Tipos de autenticacion

Existen dos tipos de autenticacion:
* Autenticacion de windows: los usuarios del sistema se pueden autentificar con su cuenta de usuario
* Autenticacion mixta: ademas de poderse autentificar con la cuenta de windows, tambien se crea el usuario **sa** con la contraseña que hayamos puesto.

# Instancias:

> Una instancia de Motor de base de datos es una copia del ejecutable de sqlservr.exe que se ejecuta como un servicio de sistema operativo. Cada instancia administra varias bases de datos del sistema y una o varias bases de datos de usuario.

# Creacion de usuarios

Para crear usuarios hay que ir el menú seguridad->inicios de sesion->nuevo inicio de sesion

![](assets/markdown-img-paste-20171130002508969.png)

# Copias de seguridad:

Se pueden hacer de varias formas:

* la primera es desde el menu contextual de la base de datos que queramos

![](assets/markdown-img-paste-2017113000400932.png)

Esta se guardara en el directorio backups de la instalacion de sqlserver.

* la segunda es yendo al directorio data y copiando los archivos a mano.

* la tercera es con la opcion generar scripts, pero hay que tener en cuenta si queremos solo los datos o tambien la estructura, deberemos ir a opciones avanzadas y seleccionar la opcion que queramos

![](assets/markdown-img-paste-20171130004351688.png)

# Tipos de ficheros.

Existen dos tipos de ficheros:
* los de la base de datos (.mdf)
* los ficheros de log (ldf)

![](assets/markdown-img-paste-20171130004655498.png)

# Indices y vistas:

[manual: documentacion/manual_indicesyVistas.pdf](../documentacion/manual_indicesyVistas.pdf)

## Resumen indices

* Van asociados a una tabla o a una vista
* Mejoran las consultas
* Empeoran las inserciones y actualizaciones de datos porque a parte de realizar la insercion o actualizacion tiene que actualizar el indices
* Un indice es como un objeto nuevo, como si fuese otra tabla que guarda informacion de la tabla de la que se creo el indice para, de algun modo, acelerar las consultas
* Una tabla puede tener muchos indices, pero solo uno puede ser agrupado (clustered)

> existen indices agrupados y no agrupados

.

> creadcion de indices en el manual punto 4 (con fotos)

## Resumen de vistas

Es como una tabla virtual o una consulta select

informacion de como se hace en el manual punto 6


# Tipos de datos

# Procedimientos

# Funciones

# If

# Case / Switch ??

# Errores
