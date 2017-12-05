use negocios2011
go

drop table pagos
go

create table pagos(
idpedido int not null,
fecha date not null,
imppagado decimal(10,2) CHECK ( imppagado > 0 )
)

alter table pagos
ADD PRIMARY KEY NONCLUSTERED (idpedido,fecha)

ALTER TABLE pagos
ADD FOREIGN KEY (idpedido) REFERENCES ventas.pedidoscabe
go

-- EJERCICIO 3
alter function dbo.im_pendiente (@idpedido int) returns decimal(10,2)
as
begin
	declare @totalPedido decimal(10,2)
	declare @totalPagos decimal(10,2)
	
	select @totalPedido = sum(preciounidad*cantidad) from ventas.pedidosdeta where idpedido=@idpedido
	select @totalPagos = sum(imppagado) from dbo.pagos where idpedido=@idpedido

	return @totalPedido-@totalPagos

end
go

select dbo.im_pendiente(1)

-- EJERCICIO 4 --> este está mal, se hace creando una tabla y haciendo insert en esa tabla

alter function dbo.topDiezventas () returns table
as
return
		(SELECT top 10 ventas.pedidoscabe.idpedido,sum(preciounidad*cantidad) as totalVenta,ventas.pedidoscabe.fechapedido from ventas.pedidoscabe
			inner join ventas.pedidosdeta on ventas.pedidosdeta.idpedido =ventas.pedidoscabe.idpedido
			group by ventas.pedidoscabe.idpedido,ventas.pedidoscabe.fechapedido
			order by ventas.pedidoscabe.fechapedido desc)
go

select dbo.topDiezventas()



-- EJERCICIO 5

alter procedure salvarPago
@importePendiente decimal(10,2) output,
@idpedido int,
@importeQuePagaAhora decimal (10,2)
as
	select @importePendiente = dbo.im_pendiente(@idpedido)
	if @importePendiente >= @importeQuePagaAhora
		begin
			--grabar importe pagado
			insert into dbo.pagos values (@idpedido,getdate(),@importeQuePagaAhora)
		end
	ELSE
		begin 
			--grabar importe pendiente (NOTA: no se muy bien donde tengo que grabar esto, no me queda claro con el enunciado)
			insert into dbo.pagos values (@idpedido,getdate(),@importePendiente)
		end
	-- volvemos a llamar a la funcion para tener el importePendiente actualizado despues del pago
	select @importePendiente = dbo.im_pendiente(@idpedido)
go

declare @idPed int = 1
declare @impPag decimal(10,2) = 10
declare @importePendiente decimal(10,2)
exec salvarPago @importePendiente,@idPed,@importePendiente
select @importePendiente
