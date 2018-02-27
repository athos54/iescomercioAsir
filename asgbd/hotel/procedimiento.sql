-- Procedimiento: Mostrar el nombre de las tres categor�as que m�s d�as han reservado en un a�o determinado.

alter procedure top3CategoriasReservas @ano int
as
begin
	select top 3 h.TIPO_HABITACION,sum(datediff("d",rh.FechaENTRADA,rh.FechaSALIDA)) from reserva_habitac as rh inner join habitaciones as h on rh.NumHABITACION=h.NumHABITACION
	where year(rh.FechaENTRADA)=@ano
	group by h.TIPO_HABITACION
	order by 2 desc
end
go

exec top3CategoriasReservas 2009

