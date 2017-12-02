
# apache

## configuracion basica
```
<VirtualHost 192.168.1.100:80>
	DocumentRoot /var/www/html/page1
</VirtualHost>
```


## denegar acceso allow deny order

> si ponemos el orden como en el ejemplo -> deny,allow deniega a todo el mundo, y
> luego permite a la red 1.0/24. si lo pusiesemos al reves, allow,deny, permitiria a la red 1.0 y seguidamente le bloquearia el acceso.

* lo importante en el orden es el **order**, como aparezca luego deny from allow from no importa

```
<Directory /var/www/html/page1>
  order deny,allow
  deny from all
  allow from 192.168.1.0/24
</Directory>
```

## ssl https

`openssl req –nodes –x509 –newkey rsa:1024 –days 365 –keyout clave.pem –out cert.pem`

```
<VirtualHost 192.168.1.100:80 192.168.1.100:443>
	DocumentRoot /var/www/html/page1
	SSLEngine on
	SSLCertificateFile	/etc/apache2/seguridad/certificados/cert.pem
	SSLCertificateKeyFile /etc/apache2/seguridad/certificados/clave.pem**
</VirtualHost>

```

## autenticacion usuarios

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

## otras directivas

`DirectoryIndex pagina1.html`
