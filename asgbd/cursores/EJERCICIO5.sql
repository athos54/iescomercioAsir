-- select * from compras.productos
-- select * from ventas.clientes
-- select * from ventas.pedidoscabe
-- select * from ventas.pedidosdeta

declare @nombreCliente as varchar(255)
declare @nombreProducto as varchar(255)
declare @idPedido as int
declare @sumaLinea as float

declare @clienteTmp as varchar(255)
declare @productoTmp as int

declare micursor cursor for
select 
	vc.nombrecia,
	cp.nombreproducto,
	vpc.idpedido,
	(vpd.cantidad*vpd.preciounidad)
from ventas.clientes as vc
inner join ventas.pedidoscabe as vpc on vc.idcliente=vpc.idcliente
inner join ventas.pedidosdeta as vpd on vpd.idpedido=vpc.idpedido 
inner join compras.productos as cp on cp.idproducto=cp.idproducto
--group by vc.nombrecia, cp.nombreproducto, vpc.idpedido

open micursor
fetch micursor into @nombreCliente,@nombreProducto,@idPedido,@sumaLinea

while @@FETCH_STATUS=0
begin
	set @clienteTmp=@nombreCliente	
	print 'Cliente: '+cast(@nombreCliente as varchar)
	-- establecer contadores sin hacer
	while @@FETCH_STATUS=0 and @productoTmp=@nombreProducto
	begin
		set @productoTmp=@nombreProducto

		-- while @@FETCH_STATUS=0 and @idPedidoTmp=@idPedido
		-- begin
			
			--fetch micursor into @nombreCliente,@nombreProducto,@idPedido,@sumaLinea
		-- end
	end
end

close micursor
deallocate micursor