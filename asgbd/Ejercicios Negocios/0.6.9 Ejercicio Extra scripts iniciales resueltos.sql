/* 0.6  Mostrar los productos que se han vendido de un 
determinado proveedor que tenga el mismo nombre 
que el empleado 1*/
use negocios2011
declare @nomEmpleado varchar(50)
set @nomEmpleado = ''
select @nomEmpleado = nomempleado from RRHH.empleados 
where idempleado = 1
select @nomEmpleado as 'Empleado con codigo 1' --solo lo muestro


SELECT productos.*,compras.proveedores.*	
from compras.productos productos
inner join  compras.proveedores on compras.proveedores.idproveedor = productos.idproveedor 
inner join ventas.pedidosdeta pedidosdeta on pedidosdeta.idproducto=productos.idproducto
 where compras.proveedores.nomproveedor = @nomEmpleado ;

--comprobar
select * from compras.productos cp 
inner join compras.proveedores p on cp.idproveedor=p.idproveedor
and  p.nomproveedor=@nomEmpleado
