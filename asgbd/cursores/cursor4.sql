--1.- Mostrar los pedidos por empleado con total por empleado

select vp.idempleado,count(*) from ventas.pedidoscabe as vp group by idempleado
select * from ventas.pedidoscabe

declare @idpedido int
declare @idempleado int
declare @empleadoActual int

declare micursor cursor for
	select idpedido,idempleado from ventas.pedidoscabe

open micursor

fetch micursor into @idpedido,@idempleado

while @@FETCH_STATUS=0
begin
	set @empleadoActual=@idempleado

	while @@FETCH_STATUS=0 and @empleadoActual=@idempleado
	begin
		print 'El empleado '+CAST(@idempleado as varchar(255))+' vendio el pedido '+cast(@idpedido as varchar(255))
		fetch micursor into @idpedido,@idempleado	
	end 

end

close micursor
deallocate micursor
