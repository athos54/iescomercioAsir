DECLARE @temporada int, @fechainicio date, @fechafinal date, @gasto decimal(10,2), @fecha date, @totaltemporada decimal(10,2), @total decimal(10,2)
set @total=0
DECLARE temporada CURSOR FOR
select temporada, FechaINICIO, FechaFINAL from dbo.temporada
OPEN temporada
FETCH temporada INTO @temporada, @fechainicio, @fechafinal
print 'Informe de gastos por temporada'
print ''
WHILE @@FETCH_STATUS=0
BEGIN
	print 'Temporada: ' + cast(@temporada as varchar)
	print 'Fecha		Importe'
	set @totaltemporada=0
	DECLARE gasto CURSOR FOR
	select precio*cantidad, Fecha from dbo.gastos where fecha
	between @fechainicio and @fechafinal
	OPEN gasto
	FETCH gasto INTO @gasto, @fecha
	WHILE @@FETCH_STATUS=0
	BEGIN
		set @totaltemporada = @totaltemporada + @gasto
		print cast(@fecha as varchar) + '	' + cast(@gasto as varchar)
		FETCH gasto INTO @gasto, @fecha
	END
	print ''
	print 'Total temporada ' + cast(@temporada as varchar) + ': ' + cast(@totaltemporada as varchar)
	print ''
	set @total = @total + @totaltemporada
	Close gasto
	DEALLOCATE gasto
	FETCH temporada INTO @temporada, @fechainicio, @fechafinal
END
print 'Importe total: ' + cast(@total as varchar)
Close temporada
DEALLOCATE temporada
go
