-- 5.10 : Función que nos muestre los 5 productos (Id y nombre) más vendidos de un cliente determinado ordenado 
-- por nombre producto.


-- 5.11 : Funcion que devuelva el id y nombre de los tres paises que mas cantidad compran de un determinado 
-- producto . Ordenado por nombre país.* jueves

drop function dbo.top3paisesmascompranproducto
go

create function dbo.top3paisesmascompranproducto(@idproducto int) returns table
as
	return (select top 3* from ventas.paises where ventas.paises.idpais in (
		select top 3 ventas.clientes.idpais from ventas.pedidosdeta
		inner join ventas.pedidoscabe on ventas.pedidoscabe.idpedido=ventas.pedidosdeta.idpedido
		inner join ventas.clientes on ventas.clientes.idcliente = ventas.pedidoscabe.idcliente
		where idproducto=@idproducto
		group by ventas.clientes.idpais
		order by sum(ventas.pedidosdeta.cantidad)
	)
	order by NOMBREPAIS desc)

	

select * from dbo.top3paisesmascompranproducto(1)