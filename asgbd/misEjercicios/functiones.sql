use negocios2011

-- 5.1 El id del empleado que más gana de un id. cargo determinado.
CREATE FUNCTION dbo.empleadoMasRico (@cargoId int) RETURNS int   
AS   
-- Returns the stock level for the product.  
BEGIN  
    declare @empleadoId int
	declare @sueldoMaximo decimal
	set @sueldoMaximo = (select max(RRHH.empleados.salario) from rrhh.empleados where idcargo=@cargoId) 
	set @empleadoId = (select idempleado from rrhh.empleados where rrhh.empleados.salario=@sueldoMaximo and idcargo=@cargoId)
	return @empleadoId
END;  
GO  


print dbo.empleadoMasRico(16)
go
-- 5.2 La descripción del producto que más cuesta de una categoría.
create function dbo.productoMasCaro (@categoriaId int) returns varchar(255)
as
begin
	declare @idProductoMasCaro decimal
	declare @texto varchar(255)
	set @idProductoMasCaro = (select idproducto from compras.productos where preciounidad=(select max(preciounidad) from compras.productos where idcategoria=@categoriaId) and idcategoria=@categoriaId)
	-- set @texto = "el producto mas caro de la categoria @categoriaId es @idProductoMasCaro pero no tiene descripcion la tabla productos"
	set @texto = concat('el producto mas caro de la categoria ',@categoriaId,' es ',@idProductoMasCaro,' pero no tiene descripcion la tabla productos')
	return @texto
end
go

print dbo.productoMasCaro(17)
go

-- 5.3 El total del importe de  ventas de un cliente.
drop function dbo.totalVentasCliente
go

create function dbo.totalVentasCliente (@clienteId char(5)) returns decimal
as
begin
	declare @total decimal
	set @total=(select sum(preciounidad*cantidad) from ventas.pedidoscabe inner join ventas.pedidosdeta on ventas.pedidoscabe.idpedido=ventas.pedidosdeta.idpedido where ventas.pedidoscabe.idcliente='NCBCK')
	return @total
end
go

print dbo.totalVentasCliente('NCBCK')
go
-- 5.4 El país que más vendemos en un determinado año.

create function dbo.paisMasVentas(@ano int) returns char(3)
as
begin
	declare @total decimal
	declare @pais char(3)
	select top 1 @total=sum(preciounidad*cantidad),@pais = ventas.clientes.idpais from ventas.pedidoscabe
		inner join ventas.pedidosdeta on ventas.pedidosdeta.idpedido=ventas.pedidoscabe.idpedido
		inner join ventas.clientes on ventas.clientes.idcliente = ventas.pedidoscabe.idcliente
		where year(ventas.pedidoscabe.fechapedido)=@ano
		group by ventas.clientes.idpais	
		order by 1 desc
	return @pais
end
go

print dbo.paisMasVentas(2013)
go
-- 5.5 Numero de Pedido con más importe de venta.
drop function dbo.pedidoMasImporte
create function dbo.pedidoMasImporte() returns int
as
begin
	declare @total decimal
	declare @idpedido int
	select top 1 @total = sum(cantidad*preciounidad), @idpedido=ventas.pedidosdeta.idpedido from ventas.pedidosdeta group by ventas.pedidosdeta.idpedido order by 1 desc
	return @idpedido
end
go

print dbo.pedidoMasImporte()
go

