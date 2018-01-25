--- 4b con  y ajustar

CREATE TRIGGER controlpagos
on pagos
for insert 
as 
DECLARE @SPAGOS DECIMAL 
DECLARE @SPEDIDO DECIMAL 
DECLARE @PAGO DECIMAL 
DECLARE @PASADO DECIMAL 

SET @SPEDIDO = (select sum(cantidad*preciounidad)
    from pedidosdeta
	where idpedido = (select idpedido from inserted))
SET @PAGO=(select importe from inserted	)
SET @SPAGOS = (select sum(importe)from Pagos 
	where idpedido = (select idpedido from inserted))
	IF (@SPAGO>@SPEDIDO)
	begin
	 SET @PASADO=@SPAGOS-@SPEDIDO
	 UPDATE PAGOS SET importe =importe-@PASADO WHERE
	 idpedido=(select idpedido from inserted) 
	 AND fecha =(select fecha  from inserted)	
	 print 'La cantidad pagada supera el precio del pedido'
  END

