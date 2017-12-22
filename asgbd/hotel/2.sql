-- Crea una función que devuelva el gasto realizado por una reserva (aplicar el iva).

alter function gastoRealizadoPorReserva(@idreserva int) returns float
begin
	return (select sum((gastos.precio*gastos.cantidad*(1+servicios.iva/100))) from gastos inner join servicios on servicios.idSERVICIOS = gastos.idSERVICIOS where gastos.idreserva=@idreserva)
end

select dbo.gastoRealizadoPorReserva(1)