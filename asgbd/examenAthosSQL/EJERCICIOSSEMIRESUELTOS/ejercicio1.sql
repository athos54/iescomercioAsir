alter function ultimoClienteReservaHabitacion (@numeroHabitacion int) 
returns @tabla table (idCliente char(12), nombre char(12))
as
begin
	declare @idCliente char(12)
	declare @nombreCliente char(12)

	select @idCliente=cliente from reserva_habitac where NumHABITACION=@numeroHabitacion order by idRESERVA desc
	select @nombreCliente=nombre from clientes
	
	if @idCliente is null
	begin
		set @idCliente='0'
		set @nombreCliente='No existe'
	end
	insert into @tabla values(@idCliente,@nombreCliente)
	return
end
go

select * from ultimoClienteReservaHabitacion(101)

