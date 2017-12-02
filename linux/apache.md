
# apache

## configuracion basica

> no hay que cargar modulos

```
<VirtualHost 192.168.1.100:80>
	DocumentRoot /var/www/html/page1
</VirtualHost>
```


## denegar acceso allow deny order

> no hay que cargar modulos

* si ponemos el orden como en el ejemplo -> deny,allow deniega a todo el mundo, y

* luego permite a la red 1.0/24. si lo pusiesemos al reves, allow,deny, permitiria a la red 1.0 y seguidamente le bloquearia el acceso.

* lo importante en el orden es el **order**, como aparezca luego deny from allow from no importa

```
<Directory /var/www/html/page1>
  order deny,allow
  deny from all
  allow from 192.168.1.0/24
</Directory>
```

> by Julian

* Permitir desde cualquier IP -> Require all granted
* Denegar desde cualquier IP -> Require all denied
* Permitir solo desde la IP 192.168.10.100 -> Require ip 192.168.10.100
* No permitir desde la IP 192.168.20.100 -> Require not ip 192.168.20.100

## ssl https

> hay que cargar modulo ssl -> a2enmod ssl.load

`openssl req –nodes –x509 –newkey rsa:1024 –days 365 –keyout clave.pem –out cert.pem`

```
<VirtualHost 192.168.1.100:80 192.168.1.100:443>
	DocumentRoot /var/www/html/page1
	SSLEngine on
	SSLCertificateFile	/etc/apache2/seguridad/certificados/cert.pem
	SSLCertificateKeyFile /etc/apache2/seguridad/certificados/clave.pem
</VirtualHost>

```

## autenticacion usuarios

> no hay que cargar modulos (creo que viene cargado por defecto)

> si se quiere usar digest cargar modulo auth_digest.load  

`crear primer usuario: htpasswd -c archivo usuario`
`crear resto usuarios: htpasswd archivo usuario`

```
<VirtualHost 192.168.1.100:80 192.168.1.100:443>
	DocumentRoot /var/www/html/page1
	<Directory /var/www/html/page1>
		AuthType Basic
		AuthName "Protected Area"
		AuthUserFile /etc/apache2/seguridad/usuarios/usuarios
		Require valid-user
	</Directory>
</VirtualHost>

```

## autenticacion grupos

> hay que cargar modulo authz_groupfile.load

* es neceario que el AuthUserFile este cargado

[file:///usr/share/doc/apache2-doc/manual/en/mod/mod_authz_groupfile.html#authgroupfile](file:///usr/share/doc/apache2-doc/manual/en/mod/mod_authz_groupfile.html#authgroupfile)

`crear archivo de grupo y poner los grupos separados por espacios`

```
<VirtualHost 192.168.1.100:80 192.168.1.100:443>
	DocumentRoot /var/www/html/page1
	<Directory /var/www/html/page1>
		AuthType Basic
		AuthName "Protected Area"
		AuthUserFile /etc/apache2/seguridad/usuarios/usuarios
    AuthGroupFile /etc/apache2/seguridad/usuarios/group
		Require group grupo
	</Directory>
</VirtualHost>

```

## otras directivas

### cambiar pagina de entrada

[file:///usr/share/doc/apache2-doc/manual/en/mod/mod_dir.html#directoryindex](file:///usr/share/doc/apache2-doc/manual/en/mod/mod_dir.html#directoryindex)

`DirectoryIndex pagina1.html`

### obligar a usar ssl
[file:///usr/share/doc/apache2-doc/manual/en/mod/mod_ssl.html#sslrequiressl](file:///usr/share/doc/apache2-doc/manual/en/mod/mod_ssl.html#sslrequiressl)

> esta directiva hay que ponerla dentro de directory

`SSLrequireSSL`


### autenticacion grupos
[file:///usr/share/doc/apache2-doc/manual/en/mod/mod_authz_groupfile.html](file:///usr/share/doc/apache2-doc/manual/en/mod/mod_authz_groupfile.html)

 1. habilitar modulo `a2enmod authz_groupfile.load`
 1. crear archivo de grupo
 1. meter los grupos que quieres permitir separados por espacios
authgroupfile


### htaccess
[file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#allowoverride](file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#allowoverride)
> esta directiva hay que ponerla dentro de directory

* allowoverride all -> permite htaccess
* allowoverride none -> **no** permite htaccess

### option indexes
[file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#options](file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#options)
> esta directiva hay que ponerla dentro de directory

* options +indexes -> permite ver contenido de la carpeta
* options -indexes -> **no** permite ver contenido de la carpeta

### servir dos paginas en MISMA IP Y MISMO PUERTO

[file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#namevirtualhost](file:///usr/share/doc/apache2-doc/manual/es/mod/core.html#namevirtualhost)

* namevirtualhost



# de aqui para abajo falta por hacerlo

servername

en usuarios aparte de require valid-user no podias poner require user alumno1 por ejemplo?

a2ensite a2dissite...


archivo ports






### logs
los logs me parece que las directivas para decir donde los guardaba era errorlog y transferlog
