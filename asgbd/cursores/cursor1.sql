

declare @id varchar(255)
declare @nombre varchar(255)
declare @pais varchar(255)

declare prueba cursor 
for	select c.idcliente,c.nombrecia,p.nombrepais from ventas.clientes c inner join ventas.paises p on c.idpais=p.idpais

open prueba

fetch prueba into @id,@nombre,@pais

while @@fetch_status=0
	begin
		print @id +','+@nombre+','+@pais
		fetch prueba into @id,@nombre,@pais
	end

close prueba
deallocate prueba
-- select c.idcliente,c.nombrecia,p.nombrepais from ventas.clientes as c inner join ventas.paises as p on c.idpais=p.idpais

-- select * from ventas.clientes
-- select * from ventas.paises