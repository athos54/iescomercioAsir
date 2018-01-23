-- 5.- Al insertar pago modificar el pago para que como máximo sea el total del pedido.

alter trigger cuatro
on pagos
instead of insert
as
if(select Importe from inserted)>(select sum(preciounidad*cantidad) from ventas.pedidosdeta where idpedido=(select idPedido from inserted))
begin
	select * into #T from inserted
	update #T set Importe=(select sum(preciounidad*cantidad) from ventas.pedidosdeta where idpedido=(select idPedido from inserted))
	insert into pagos select * from #T
	print 'Hemos insertado el máximo insertable'
end
else
	insert into pagos select * from inserted
go
insert into pagos values(1,null,10000)
select * from pagos