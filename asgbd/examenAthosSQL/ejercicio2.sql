alter procedure ejercicio2
@numeroReserva decimal(18,0), 
@diasASumar int
as
 begin
	declare @duracionReserva int
	declare @fechaEntrada date
	declare @fechaSalida date
	declare @nuevaFechaSalida date
	declare @estaReservada varchar

	select @duracionReserva=datediff(day,fechaentrada,fechasalida) from reserva_habitac where idRESERVA=@numeroReserva
	select @fechaEntrada=fechaentrada,@fechaSalida=fechasalida from reserva_habitac where idRESERVA=@numeroReserva
	
	if @duracionReserva is not null
	begin

		if @diasASumar<0 -- es una resta
		begin
			if @diasASumar>=@duracionReserva
			begin
				print 'No se pueden quitar tantos dias'
			end
			else
			begin
				update reserva_habitac set fechaSalida=(dateadd(day,@diasAsumar,@fechaSalida)) where idRESERVA=@numeroReserva
				print 'reserva actualizada'
			end

		end
		else  --es suma
		begin
			set @nuevaFechaSalida=dateadd(day,@diasAsumar,@fechaSalida)
			select @estaReservada=idRESERVA from reserva_habitac where @nuevaFechaSalida between FechaENTRADA and FechaSALIDA and idRESERVA=@numeroReserva
			
			if @estaReservada is null
			begin
				update reserva_habitac set fechaSalida=@nuevaFechaSalida where idRESERVA=@numeroReserva
				print 'reserva actualizada'
			end
			else
				print 'no se puede ampliar tanto, la habitacion esta reservada para esas fechas'
		end
	end
	
end
go

declare @numReser decimal(18,2)
declare @numDias int
set @numReser = 3
set @numDias = 3
exec ejercicio2 @numReser, @numDias
