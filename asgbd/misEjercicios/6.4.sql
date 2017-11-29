-- 6.4 Reciba un Id Empleado. Nos devuelva el número de pedidos y la suma de las cantidades de los pedidos suyos . 
-- Todo en un mes y año determinado, por defecto 2012 y 03.

use negocios2011;
go

alter procedure numeroDePedidosYSumaDeCantidades
@total decimal(10,2) output,
@numeroDePedidos decimal(10,2) output,
@mes int = 9,
@ano int = 2012,
@idEmpleado int=1

as
	select @numeroDePedidos = COUNT(*) from ventas.pedidoscabe 
	where year(ventas.pedidoscabe.fechapedido)=@ano
	and MONTH(ventas.pedidoscabe.fechapedido)=@mes
	and ventas.pedidoscabe.idempleado=@idEmpleado

	select @total = sum(ventas.pedidosdeta.preciounidad*ventas.pedidosdeta.cantidad) from ventas.pedidoscabe
	inner join ventas.pedidosdeta on ventas.pedidosdeta.idpedido = ventas.pedidoscabe.idpedido
	where year(ventas.pedidoscabe.fechapedido)=@ano
	and MONTH(ventas.pedidoscabe.fechapedido)=@mes
	and ventas.pedidoscabe.idempleado=@idEmpleado
go


declare @idEmpleado int = 1
declare @tot decimal(10,2)
declare @nped decimal(10,2)
exec numeroDePedidosYSumaDeCantidades  @tot output,@nped output

select @tot,@nped




declare @total decimal(10,2)
select @total = sum(ventas.pedidosdeta.preciounidad*ventas.pedidosdeta.cantidad) from ventas.pedidoscabe
	inner join ventas.pedidosdeta on ventas.pedidosdeta.idpedido = ventas.pedidoscabe.idpedido
	where year(ventas.pedidoscabe.fechapedido)=2012
	and MONTH(ventas.pedidoscabe.fechapedido)=9
	and ventas.pedidoscabe.idempleado=1

select @total


select COUNT(*) from ventas.pedidoscabe 
	where year(ventas.pedidoscabe.fechapedido)=2012
	and MONTH(ventas.pedidoscabe.fechapedido)=09
	and ventas.pedidoscabe.idempleado=1

select * from ventas.pedidoscabe
select * from ventas.pedidosdeta