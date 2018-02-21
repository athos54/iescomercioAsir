-- 20.- Estudio de Gastos por cliente y pais.
-- Para cada cliente mostrar fecha gasto y el Importe.
-- Total de importe por cliente , por país y total final

-- INFORME DE GASTO POR CLIENTE:
 
-- PAIS: oTRO3               
-- FECHA DE GASTO	IMPORTE
-- CLIENTE: FELIPE      
-- 2009-03-15	10.00
-- 2009-04-15	100.00
 
-- IMPORTE CLIENTE FELIPE      	110.00
-- IMPORTE PAIS ESPAÑA              110.00
 
-- PAIS: ESPAÑA              
-- FECHA DE GASTO	IMPORTE
-- CLIENTE: LUIS        
-- 2009-03-15	2.00

-- IMPORTE CLIENTE LUIS        	2.00
-- IMPORTE PAIS ESPAÑA              2.00 
-- IMPORTE TOTAL : 112.00


--select * from gastos
--select * from clientes
--select * from reserva_habitac

declare @totalFinal float
declare @totalGasto float
declare @totalPais float
declare @totalCliente float
declare @nombreClienteTmp as varchar(255)
declare @nombreCliente as varchar(255)
declare @paisTmp as varchar(255)
declare @pais as varchar(255)
declare @fechaTmp as date
declare @fecha as date

declare micursor cursor for
	select (g.precio*g.cantidad) as total,c.nombre,c.Pais,g.Fecha
	from gastos as g
	inner join reserva_habitac as rh on rh.idRESERVA=g.idRESERVA
	inner join clientes as c on c.Identificacion=rh.CLIENTE
	order by 3,2

print 'INFORME DE GASTO POR CLIENTE:'
set @totalFinal=0
open micursor
fetch micursor into @totalGasto,@nombreCliente,@pais,@fecha
while @@FETCH_STATUS=0
begin
	set @paisTmp=@pais
	print ''
	print space(3)+'Pais: ' + @pais
	print space(3)+'FECHA DE GASTO'+space(3)+'IMPORTE'
	set @totalPais=0
	
	while @paisTmp=@pais and @@FETCH_STATUS=0
	begin
		set @totalCliente=0
		set @nombreClienteTmp=@nombreCliente
		print ''
		print space(6)+'Cliente: '+@nombreCliente
		while @nombreClienteTmp=@nombreCliente and @paisTmp=@pais and @@FETCH_STATUS=0
		begin
			set @fechaTmp=@fecha
			print space(9)+cast(@fecha as varchar)+space(3)+cast(@totalGasto as varchar)
			set @totalCliente=@totalCliente+@totalGasto
			fetch micursor into @totalGasto,@nombreCliente,@pais,@fecha
		end
		print space(6)+'IMPORTE CLIENTE '+@nombreClienteTmp+space(1)+cast(@totalCliente as varchar)
		set @totalPais=@totalPais+@totalCliente
	end
	set @totalFinal=@totalFinal+@totalPais
	print space(3)+'IMPORTE DE '+@paisTmp+space(1)+cast(@totalPais as varchar)

end
print ''
print 'El total final es: '+cast(@totalFinal as varchar)

close micursor
deallocate micursor

-- PAIS: oTRO3               
-- FECHA DE GASTO	IMPORTE
-- CLIENTE: FELIPE      
-- 2009-03-15	10.00
-- 2009-04-15	100.00