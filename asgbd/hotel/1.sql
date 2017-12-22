-- Crea una función que devuelva si una habitación está reservada en una fecha que se
-- especifique.

create function estaReservadaLaHabitacionEnEstaFecha(@numeroDeHabitacion int,@fecha date) returns char(2)
begin
	declare @reservada int
	declare @resultado char(2)
	select @reservada=count(*) from reserva_habitac where FechaENTRADA <= @fecha and FechaSALIDA >= @fecha and NumHABITACION=@numeroDeHabitacion
	if @reservada > 0
		set @resultado = 'si'
	else
		set @resultado = 'no'
	return @resultado
end

select dbo.estaReservadaLaHabitacionEnEstaFecha(101,'2009-03-05')