/* 4 Al insertar pago, comprobar que no supera el total del pedido*/
CREATE TRIGGER controlpagos
on pagos
for INSERT 
as 
if (select sum(importe)from Pagos 
	where idpedido = (select idpedido from inserted))
	 >
	(select sum(cantidad*preciounidad*(1-DTO/100) from pedidosdeta
	where idpedido = (select idpedido from inserted))
	begin
	rollback transaction
	print 'La cantidad pagada supera el precio del pedido'
	end
	else
	print 'Pago insertado con éxito'
