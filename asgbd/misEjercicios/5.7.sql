-- 5.7 Defina una función que liste el acumulado de las ventas de los productos por meses en un determinado año, 
-- incluya el nombre del producto, el mes y el importe total vendido en cada mes. Ordenar de más a menos venta.
use negocios2011
go

drop function dbo.acumulado
go

create function dbo.acumulado (@ano int) returns table
as
-- begin
	return (select top 1000 month(fechapedido) as mes,sum(ventas.pedidosdeta.cantidad) as totalunidades,sum(ventas.pedidosdeta.cantidad*ventas.pedidosdeta.preciounidad) as totaldinero,ventas.pedidosdeta.idproducto, compras.productos.NOMBREPRODUCTO
	from ventas.pedidosdeta 
	inner join ventas.pedidoscabe on pedidosdeta.idpedido=pedidoscabe.idpedido 
	inner join compras.productos on ventas.pedidosdeta.idproducto = compras.productos.idproducto
	where year(fechapedido)=@ano 
	group by month(fechapedido),ventas.pedidosdeta.idproducto,compras.productos.NOMBREPRODUCTO
	order by 3 desc)
-- end
go

select * from dbo.acumulado(2012)