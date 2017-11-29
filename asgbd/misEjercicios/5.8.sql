-- 5.8 : Funci�n devuelva el nombre del pa�s y el n�mero de pedidos realizados siempre que sean mayores que uno
drop function dbo.pedidosPorPais
go

create function dbo.pedidosPorPais ( ) returns table
as
return(
	select count(ventas.pedidoscabe.idpedido) as numeroDePedidos,(select ventas.paises.NOMBREPAIS from ventas.paises where ventas.paises.idpais=ventas.clientes.idpais) as nombreDePais from ventas.pedidoscabe 
	inner join ventas.clientes on pedidoscabe.idcliente=ventas.clientes.idcliente 
	group by ventas.clientes.idpais
	having count(ventas.pedidoscabe.idpedido)>1
)


select * from dbo.pedidosPorPais()


-- 5.9: Funci�n que devuelva el Id y el nombre del ultimo cliente que realiz� un pedido en un determinado a�o. 
drop function dbo.clienteUltimoPedido
go

create function dbo.clienteUltimoPedido (@ano int) returns table
as
return (
	select top 1 ventas.pedidoscabe.idcliente,ventas.clientes.nombrecia from ventas.pedidoscabe inner join ventas.clientes on ventas.clientes.idcliente = ventas.pedidoscabe.idcliente where year(ventas.pedidoscabe.fechapedido)=@ano order by ventas.pedidoscabe.fechapedido
)

select * from dbo.clienteUltimoPedido(2012)
