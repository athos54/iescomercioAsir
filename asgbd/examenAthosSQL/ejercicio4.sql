declare @ntemporada varchar(255)
declare @inicio date
declare @fin date
declare @tipo varchar(255)
declare @totalTemporada float

declare micursor cursor for
	select * from temporada

print 'Informe de gastos por temporada'

open micursor

fetch micursor into @ntemporada,@inicio,@fin,@tipo

while @@FETCH_STATUS=0
begin
	print 'TEMPORADA: '+CAST(@ntemporada AS VARCHAR)
	print 'FECHA DE GASTO'+SPACE(7)+'IMPORTE'
	
	set @totalTemporada=0
	declare @totalDia float
	declare @fecha date
	declare micursor2 cursor for
		select fecha,sum(cantidad*precio) from gastos where fecha between @inicio and @fin group by fecha
	open micursor2
	fetch micursor2 into @fecha,@totalDia
		while @@FETCH_STATUS=0
		begin
			print cast(@fecha as varchar)+space(12)+cast(@totalDia as varchar)
			set @totalTemporada=@totalTemporada+@totalDia
			fetch micursor2 into @fecha,@totalDia
		end 
	close micursor2
	deallocate micursor2
	print ''
	print 'IMPORTE TEMPORADA '+CAST(@ntemporada AS VARCHAR)+'... '+CAST(@totalTemporada AS VARCHAR)
	print ''
	fetch micursor into @ntemporada,@inicio,@fin,@tipo
end

close micursor
deallocate micursor



--SELECT * from gastos
--select * from temporada