-- ARTICULO : ARTICULO1
-- PEDIDO	FECHA		IMPORTE
--	  5		01/12/2012	   	125
--    8		07/11/2012		250
-- TOTAL ARTICULO1 			375
-- 
-- ARTICULO : ARTICULO2
-- PEDIDO	FECHA		IMPORTE
--    6		01/10/2012	   	120
--    8		07/11/2012		 50
-- TOTAL ARTICULO2 			170
-- IMPORTE TOTAL     	  	545


declare @nomprod varchar(255)
declare @idped varchar(255)
declare @suma varchar(255)
declare @fecha varchar(255)
DECLARE @NOMBREPRODUCTO VARCHAR(255)
declare @totalArticulo float
declare @total float

DECLARE MICURSOR CURSOR FOR
	SELECT 
		compras.productos.nombreproducto,
		ventas.pedidoscabe.idpedido,
		sum(ventas.pedidosdeta.preciounidad*ventas.pedidosdeta.cantidad)
		,ventas.pedidoscabe.fechaentrega
	from ventas.pedidoscabe inner join ventas.pedidosdeta on ventas.pedidoscabe.idpedido=ventas.pedidosdeta.idpedido
	inner join compras.productos on compras.productos.idproducto= ventas.pedidosdeta.idproducto 
--	group by ventas.pedidosdeta.idproducto,ventas.pedidosdeta.idpedido, compras.productos.nombreproducto,ventas.pedidoscabe.idpedido,ventas.pedidoscabe.fechaentrega
	group by 
		ventas.pedidosdeta.idproducto,
		compras.productos.nombreproducto,
		ventas.pedidoscabe.idpedido,
		ventas.pedidoscabe.fechaentrega
	order by 1,2

open micursor 
fetch micursor into @nomprod,@idped,@suma,@fecha
set @totalArticulo=0
set @total=0
WHILE @@FETCH_STATUS=0
begin
	print 'Articulo: '+@nomprod
	SET @NOMBREPRODUCTO=@nomprod
	print 'Pedido Fecha Importe'
	set @totalArticulo=0
	WHILE @nombreproducto=@nomprod and @@FETCH_STATUS=0
	begin
		print @idped+' '+@fecha+' '+@suma
		set @totalArticulo=@totalArticulo+@suma
		fetch micursor into @nomprod,@idped,@suma,@fecha
	end
	print 'El total del articulo es: '+cast(@totalArticulo as varchar)
	set @total=@total+@totalArticulo
end
print 'El total es: '+cast(@total as varchar)
close micursor
deallocate micursor

