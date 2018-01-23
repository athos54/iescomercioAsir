--6.- Al insertar o modificar un Cliente, si no existe un país crearlo con nombre desconocido.

select * from ventas.clientes

create trigger seis
on ventas.clientes
instead of insert
as
if( (select count(*) from ventas.paises where idpais= (select idpais from inserted) ) = 0 )
begin
	insert into ventas.paises('desconocido')
	up
end




select count(*) from ventas.paises where idpais='espfds'

select * from ventas.paises