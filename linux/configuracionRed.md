Nota: para que el gestor de red del interface grafico no nos borre la configuracion tenemos que desinstalar el paquete `falta por rellenar`

> archivo de configuracion /etc/network/interfaces

```
auto ens32
iface ens32 inet static
	address 192.168.1.100
	netmask 255.255.255.0
	gateway 192.168.1.1
```

Si queremos poner varias direcciones ips en la misma interface:

```
auto ens32:1
iface ens32:1 inet static
	address 192.168.1.100
	netmask 255.255.255.0

auto ens32:2
iface ens32:2 inet static
	address 192.168.2.100
	netmask 255.255.255.0
```

para configurar los dns se hace en el archivo `/etc/resolv.conf`

```
root@Servidor:/home/alumno# cat /etc/resolv.conf
nameserver 192.168.72.2
```
