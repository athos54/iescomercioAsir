use negocios2011
go
--Si tiene restriccion de foreing key no dejará insertar
-- No vale . debe ser instead 
alter trigger inscliente onventas.clientes 
for insert, update
as
if exists (select idpais from inserted where inserted.idpais = (select idpais from paises))
begin
print 'El cliente ha sido añadido correctamente'
end
else 
declare @idpais char(3)
select @idpais = idpais from inserted
insert into paises (idpais, nombrepais) values (@idpais, 'desconocido')
print 'Cliente y país añadidos corrrectamente'