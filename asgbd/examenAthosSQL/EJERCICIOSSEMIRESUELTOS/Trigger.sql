create trigger controlareserva on dbo.gastos
for insert,update,delete
as
begin
	declare @preciogasto decimal(10,2), @nacionalidad char(4)
	select @preciogasto = precio from inserted
	select @nacionalidad = dbo.clientes.Pais from inserted inner join dbo.reserva_habitac on inserted.idRESERVA = dbo.reserva_habitac.idRESERVA
	inner join dbo.clientes on dbo.reserva_habitac.CLIENTE = dbo.clientes.Identificacion
	if (@preciogasto = 0)
		update dbo.gastos set Precio = (select dbo.servicios.Precio from dbo.servicios, inserted where dbo.servicios.idSERVICIOS = inserted.idSERVICIOS)
		where idSERVICIOS = (select idSERVICIOS from inserted)
	if (@nacionalidad = 'ESPAÑA')
		update dbo.gastos set precio = Precio - (Precio*10/100) where idSERVICIOS = (select idSERVICIOS from inserted)
	update dbo.clientes set saldo = saldo + (select Precio from inserted) where Identificacion = (select CLIENTE from dbo.reserva_habitac where idRESERVA = (select idRESERVA from inserted))
	update dbo.clientes set saldo = saldo + (select Precio from inserted) where Identificacion = (select CLIENTE from dbo.reserva_habitac where idRESERVA = (select idRESERVA from inserted))
end
go

