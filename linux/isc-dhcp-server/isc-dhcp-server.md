# Servidor dhcp isc-dhcp-server

archivos de configuracion:

> `/etc/default/isc-dhcp-server` -> aqui se configura las interfaces por los cuales del servidor va a repartir ips ->  INTERFACESv4="ens32 ens33"


> `/etc/dhcp/dhcpd.conf` -> aqui se configura el servidor dhcp

En el servidor dhcp podemos configurar las directivas de forma global o ir "localizandolas", esto quiere decir que podemos poner por ejemplo el servidor dns fuera de todas las directivas, y este se aplicara a todas los rangos que sirvamos **menos** a los rangos que tengan esa directiva.

## Listado de directivas mas importantes

* option domain-name "example.org";

  Especifica el nombre de dominio

* option domain-name-servers 192.168.1.1

  Especifica los servidores dns

* default-lease-time 600;

  Tiempo de vida de esa asignacion de ip

* max-lease-time 7200;

  Tiempo maximo que el cliente usará esa ip (si no es capaz de volver a solicitar una ip al servidor dhcp, transcurrido ese tiempo el cliente desechara esa dirección)

* subnet 10.152.187.0 netmask 255.255.255.0 {}

  Esta directiva se usa para especificar los rangos por los cuales vamos a dar direcciones

* range 10.254.239.10 10.254.239.20;

  con esta directiva especificamos las direcciones que vamos a repartir **esta directiva debe estar dentro de subnet**

  esta directiva se puede poner varias veces dentro de subnet para especificar diferentes rangos

* option routers 192.168.1.1

  puerta de enlace

* host fantasia {
  hardware ethernet 08:00:07:26:c0:a5;
  fixed-address fantasia.example.com;
}

  Nos sirve para especificar configuraciones especificas para un determinado host (equipo). Dentro de esta directiva podemos poner por ejemplo option routers, default-lease-time etc...


## Ejemplo completo

```
option domain-name "midominio.org";
option domain-name-servers 192.168.1.100;
default-lease-time 600;
max-lease-time 7200;
ddns-update-style none;

subnet 192.168.1.0 netmask 255.255.255.0 {
  range 192.168.1.101 192.168.1.150;
  option routers 192.168.1.100;
}

subnet 192.168.2.0 netmask 255.255.255.0 {
  range 192.168.2.101 192.168.2.150;
  option routers 192.168.2.100;
}

host cliente1 {
  hardware ethernet 00:0c:29:b2:18:8a;
  fixed-address 192.168.1.101;
}

host cliente2 {
  hardware ethernet 00:0c:29:b8:3c:16;
  fixed-address 192.168.2.101;
}

```

## Otros

Desde un cliente linux, para solicitar al servidor una nueva direccion dhcp podemos usar el comando `dhclient -v`
