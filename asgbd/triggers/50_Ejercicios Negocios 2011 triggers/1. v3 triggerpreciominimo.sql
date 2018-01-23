USE [negocios2011]
GO
/****** Object:  Trigger [VENTAS].[PrecioMinimo]    Script Date: 02/26/2014 21:43:01 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER trigger [VENTAS].[PrecioMinimo]
   on [VENTAS].[pedidosdeta]
   for update,insert
   as
   DECLARE @ppro DECIMAL, @pped DECIMAL
    select @ppro=p.preciounidad,@pped=i.preciounidad  
	from COMPRAS.PRODUCTOS as P inner join
   inserted as i on i.idproducto=P.idproducto
   PRINT @pped
PRINT @ppro
 if @pped<@ppro 
BEGIN
  ROLLBACK TRANSACTION
  PRINT 'EL precio PRODUCTO no FUE cambiabo EN LA BASE DE DATOS'
END
ELSE
   PRINT 'EL precio PRODUCTO FUE cambiabo EN LA BASE DE DATOS'
/*update [VENTAS].[pedidosdeta]
set preciounidad = 1
where idpedido =2
go*/