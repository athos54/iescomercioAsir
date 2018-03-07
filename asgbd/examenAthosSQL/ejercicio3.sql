select * from gastos
select * from reserva_habitac
select * from servicios
select * from clientes

alter TRIGGER ejercicio3 ON dbo.gastos INSTEAD OF INSERT, UPDATE, DELETE 
AS  BEGIN
	
	declare @precio float
	declare @esEspanol char(20)
	declare @idcliente char(12)
	select @precio=precio from inserted
	if(@precio=0)
	begin
		select @precio=precio from servicios where idservicios=(select idservicios from inserted)
	end

	select @esEspanol=pais from gastos as g 
	inner join reserva_habitac as rh on g.idRESERVA=rh.idRESERVA
	inner join clientes as c on c.Identificacion=rh.CLIENTE
	where g.idSERVICIOS=(select idSERVICIOS from inserted)

	select @idCliente=pais from gastos as g 
	inner join reserva_habitac as rh on g.idRESERVA=rh.idRESERVA
	inner join clientes as c on c.Identificacion=rh.CLIENTE
	where g.idSERVICIOS=(select idSERVICIOS from inserted)


	if @esEspanol='ESPAÑA'
	begin
		set @precio=@precio-(@precio*0.10)
	end

	if exists(select * from deleted) and exists(select * from inserted)
	begin
		-- es un update
		update gastos set precio=@precio
		update clientes set saldo=((select precio from inserted) - (select precio from deleted)) where Identificacion=@idcliente
	end
	else if not exists(select * from deleted)
	begin
		-- es un insert
		declare @idgas varchar
		select @idgas=idgastos from inserted
		declare @idreser varchar
		select @idreser=idreserva from inserted
		declare @idserv varchar
		select @idserv=idservicios from inserted
		declare @fech varchar
		select @fech=fecha from inserted
		declare @cant varchar
		select @cant=cantidad from inserted

		insert into gastos(idgastos,idreserva,idservicios,fecha,cantidad,precio) values(
			@idgas,
			@idreser,
			@idserv,
			@fech,
			@cant,
			@precio
		)
		update clientes set saldo=((select saldo from clientes where Identificacion=@idcliente) - (select precio from deleted)) where Identificacion=@idcliente
	end
	else
	begin
	-- es un delete
	print 'delete'
		delete from gastos where idgastos=(select idgastos from deleted)
		update clientes set saldo=((select saldo from clientes where Identificacion=@idcliente) + (select precio from deleted)) where Identificacion=@idcliente
	end



END

GO
