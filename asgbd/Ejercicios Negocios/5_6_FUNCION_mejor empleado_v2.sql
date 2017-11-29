/*5.6  Empleado que más pedidos hace un mes de un año determinado.*/
USE negocios2011
GO
alter function emplemes(
@year int,
@mes int)
returns varchar(7)
begin
declare @ret varchar (7) ='ninguno'
if exists(
	select idpedido
		from ventas.pedidoscabe
		where YEAR(fechapedido) = @year
			and MONTH(fechapedido) = @mes
		)
	set @ret = (
		select top 1 COUNT(idpedido)
			from ventas.pedidoscabe
			where YEAR(fechapedido) = @year
				and MONTH(fechapedido) = @mes
			group by idempleado)
return @ret
end
go
select dbo.emplemes (2012,9)