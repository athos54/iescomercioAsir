-- 6.2  Reciba un cargo, Devuelva el id del empleado  y el salario  del que más gana de un cargo determinado.
use negocios2011;
go

alter procedure empleadoQueMasGanaDeUnCargoDeterminado
@idCargo int,
@idEmpleado int output,
@salarioEmpleado decimal(10,2) output
as
	select top 1 @idEmpleado=idempleado,@salarioEmpleado=salario from rrhh.empleados where idcargo=@idCargo 
	order by salario desc
go

declare @idEmpleadoRes int
declare @salarioEmpleadoRes decimal(10,2)
declare @idCargo int
set @idCargo=16
exec empleadoQueMasGanaDeUnCargoDeterminado @idCargo,@idEmpleado=@idEmpleadoRes output,@salarioEmpleado=@salarioEmpleadoRes output
select @idEmpleadoRes,@salarioEmpleadoRes
go

-- 6.3 Suba en un determinado porcentaje el precio de los productos  a una categoría determinada.

alter procedure subirPorcentajeACategoria
@porcentaje int,
@idCategoria int
as
	update compras.productos set preciounidad=(preciounidad*(1+@porcentaje/100)) where idcategoria=@idCategoria
go

declare @porcentajeEntrada int
declare @idCategoriaEntrada int
set @porcentajeEntrada=10
set @idCategoriaEntrada=25
exec subirPorcentajeACategoria
@porcentaje=@porcentajeEntrada,
@idCategoria=@idCategoriaEntrada

select * from compras.productos


