-- • Cree una función que devuelva el gasto por uso de habitación de una reserva
create function gastoPorUsoHabitacionPorReserva(@idreserva int) returns float
begin
	declare @fechaent date
	declare @fechasal date
	declare @numHab int
	declare @temp int
	declare @tipoHab int
	declare @precioActual float
	declare @diasDeEstancia int
	declare @gastoReserva float

	set @fechaent= (select fechaentrada from reserva_habitac where idreserva=@idreserva)
	set @fechasal= (select fechasalida from reserva_habitac where idreserva=@idreserva)
	set @numhab = (select numhabitacion from reserva_habitac where idreserva=@idreserva)

	set @temp = (select dbo.queTemporadaEs(@fechaent))
	set @tipoHab = (select dbo.queTipoDeHabitacionEs(@numHab))
	set @precioActual = (select dbo.precioHabitacionHoy(@tipoHab,@temp))
	set @diasDeEstancia = (dbo.diasDeEstancia(@fechasal,@fechaent))
	set @gastoReserva = (@diasDeEstancia*@precioActual)
	return @gastoReserva

end

select dbo.gastoPorUsoHabitacionPorReserva(3)

create function diasDeEstancia(@entrada date,@salida date) returns int
begin
	return (DATEDIFF(day,@salida,@entrada))
end

alter function queTemporadaEs(@fecha date) returns int
begin
	return (select temporada from temporada where fechainicio<=@fecha and fechafinal>=@fecha)
end

create function queTipoDeHabitacionEs(@numeroHabitacion int) returns int
begin
	return (select tipo_habitacion from habitaciones where numhabitacion=@numeroHabitacion)
end

create function precioHabitacionHoy(@tipoHabitacion int,@temporada int) returns float
begin
	return (select precio from precio_habitacion where temporada=@temporada and tipo_habitacion=@tipoHabitacion)
end
