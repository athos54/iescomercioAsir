<!-- TOC START min:1 max:3 link:true update:true -->
- [routing linux](#routing-linux)
  - [1. permitir routing entre interfaces de red](#1-permitir-routing-entre-interfaces-de-red)
  - [2. permitir salir a internet desde otras redes](#2-permitir-salir-a-internet-desde-otras-redes)

<!-- TOC END -->

# routing linux

## 1. permitir routing entre interfaces de red

Para poder realizar routing en linux debemos poner ip_forward a 1, para esto lo podemos hacer de dos formas

* modificando el archivo `/etc/sysctl.conf` y poniendo la directiva `net.ipv4.ip_forward=1`. De esta forma el cambio es **permanente**, pero tendremos que reiniciar para que los cambios tengan efecto.

* modificando `echo 1 > /proc/sys/net/ipv4/ip_forward`. De esta forma **NO** es permanente

> si queremos que sea permanente y que no haya que reiniciar tendremos que realizar las dos acciones anteriores


## 2. permitir salir a internet desde otras redes

Tendremos que añadir entradas a iptables, para esto, ejecutaremos el siguiente comando

`iptables -t nat -A POSTROUTING -s 192.168.1.0/24 -j MASQUERADE`

Esto permitira a la red 192.168.1.0 acceder a internet a traves del servidor
