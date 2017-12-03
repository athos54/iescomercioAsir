#Notas sobre configuracion en linux

* El archivo para configurar ip_fordware es `/etc/sysctl.conf`
* Para comprobarlo: `/proc/sys/net/ipv4/ip_forward`


# Configuracion dhcp

## configuracion de rango

```
subnet 192.168.1.0 netmask 255.255.255.0 {
  range 192.168.1.101 192.168.1.110; #rango
  option routers 192.168.1.100; #puerta enlace
  option domain-name-servers 192.168.1.100; #dns
}
```
## ips reservadas a mac

```
host cliente2 {
  hardware ethernet 00:0c:29:b8:3c:16;
  fixed-address 192.168.2.101;
}

```
