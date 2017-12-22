-- Crea una función que devuelva los ingresos por tipo de servicio para un periodo que
-- se especifique
alter function ingresosPorServicioPeriodo(@de date,@a date) returns table
as
	return (select servicios.nombreservicio,sum(gastos.precio*gastos.cantidad) as total from gastos inner join servicios 
	on gastos.idservicios=servicios.idservicios 
	where gastos.fecha >= @de 
	and gastos.fecha <=@a
	group by servicios.nombreservicio)
go

select * from dbo.ingresosPorServicioPeriodo('2009-03-15','2009-03-25')
