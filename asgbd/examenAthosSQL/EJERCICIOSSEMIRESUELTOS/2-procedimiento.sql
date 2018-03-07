use hotel
go
create procedure p_sumaDias
@reserva int,
@dias int
as
	declare @fecEntrada date, @fecSalida date, @habitacion int, @fecdesarrollo date
	if not exists (select * from reserva_habitac where idRESERVA=@reserva) 
		begin
			print 'La reserva solicitada no existe'
		end
	else
		begin
			select  @fecEntrada=FechaENTRADA,
					@fecSalida=FechaSALIDA,
					@habitacion=NumHABITACION
			from reserva_habitac
			where idRESERVA=@reserva
			set @fecdesarrollo=( select dateadd(d,@dias,@fecSalida) )
			print @fecdesarrollo
			
			if @fecdesarrollo <= @fecEntrada print 'Los dias a restar son demasiados.'
			else
				begin
					if exists ( select * from reserva_habitac where idRESERVA<>@reserva and NumHABITACION=@habitacion and @fecdesarrollo between FechaENTRADA and FechaSALIDA )
						begin
							print 'La operación solicitada entra en conflicto con una reserva existente'
						end
					else update reserva_habitac set FechaSALIDA=@fecdesarrollo where idRESERVA=@reserva
				end
		end
go

exec p_sumaDias @dias=-3, @reserva=1


