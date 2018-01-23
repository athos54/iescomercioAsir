create trigger cuatro
on pagos
for insert
as
if(select Importe from inserted)>(select sum(preciounidad*cantidad) from ventas.pedidosdeta where idpedido=(select idPedido from inserted))
begin
	rollback transaction
	print 'Demasiado dinero'
end
else
	print 'El pedido se ha insertado en la base de datos'


insert into pagos values(1,null,1000)
