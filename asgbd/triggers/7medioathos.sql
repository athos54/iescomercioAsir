-- 7.- Al insertar o modificar en pedidosdeta comprobrar que haya existencias en el producto.

create trigger Existe_Stock
   on ventas.pedidosdeta
   for insert,update
   as
declare @existencias int
select @existencias = UNIdadesENEXISTENCIA from COMPRAS.productos
where  IDPRODUCTO = (select idproducto from inserted)

declare @diferenciaCantidad int
declare @IDPROD int
declare @cantidadInsertada int
declare @cantidadAnterior int
select @cantidadInsertada = cantidad, @IDPROD=IDPRODUCTO from inserted
select @cantidadAnterior = cantidad from deleted
set @diferenciaCantidad = @cantidadInsertada - @cantidadAnterior

iF (@existencias >= @diferenciaCantidad ) 
	BEGIN
		UPDATE COMPRAS.PRODUCTOS SET UNIdadesENEXISTENCIA = @existencias - @diferenciaCantidad
		WHERE IDPRODUCTO = @IDPROD
	END
    ELSE
    BEGIN
		rollback transaction
		raiserror('No Hay Existencia',16,1)
	END	
GO


select * from compras.productos
select * from ventas.pedidosdeta

update ventas.pedidosdeta set cantidad = 198 where idpedido=2

update compras.productos set unidadesenexistencia=59