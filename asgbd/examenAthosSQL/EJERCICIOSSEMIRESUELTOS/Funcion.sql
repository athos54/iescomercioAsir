drop function dbo.ultimocliente
go
create function dbo.ultimocliente (@habitacion int)
returns @tabla table (id char(12), cliente varchar(40))
as
begin
	if ((select count(*) from dbo.reserva_habitac where NumHABITACION = @habitacion) = 0)
		insert into @tabla 
		select '0', 'no existe'
	else
		insert into @tabla
		select top 1 dbo.clientes.Identificacion, dbo.clientes.Nombre
		from dbo.reserva_habitac inner join dbo.clientes on dbo.reserva_habitac.CLIENTE = dbo.clientes.Identificacion
		where dbo.reserva_habitac.NumHABITACION = @habitacion
		group by dbo.clientes.Identificacion, dbo.clientes.Nombre, dbo.reserva_habitac.FechaENTRADA
		order by dbo.reserva_habitac.FechaENTRADA desc
	return
end
go

select * from dbo.ultimocliente (101)
