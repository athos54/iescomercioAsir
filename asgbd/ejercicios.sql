ALTER procedure descuentoMas1000
@masMil char(2) output,
@idCliente char(5) = 'NCBCK'
as
 begin
	declare @totalCliente float

	
	select @totalCliente=sum(preciounidad*cantidad) 
	from ventas.pedidosdeta vpd inner join ventas.pedidoscabe vpc on vpd.idpedido=vpc.idpedido 
	where vpc.idcliente=@idCliente

	if @totalCliente>300
	begin
		update ventas.clientes set descuento=10.00 where idcliente=@idCliente
		set @masMil='si'
	end
	else
	begin
		set @masMil='no'
	end
	print @masMil
end
go

declare @resultado char(2)
declare @cliente char(5)
set @cliente = 'NCBCK'
exec descuentoMas1000 @masMil=@resultado

print @resultado


alter function mifunction (@idCliente char(5)) returns float
as
begin
	return (
		select sum(preciounidad*cantidad) 
		from ventas.pedidosdeta vpd inner join ventas.pedidoscabe vpc on vpd.idpedido=vpc.idpedido 
		where vpc.idcliente=@idCliente
	)
end
go

select dbo.mifunction('NCBCK')


declare @nombre varchar(255)
declare @direccion varchar(255)
declare @pais varchar(255)

declare micursor cursor for
	select nombrecia,direccion,idpais from ventas.clientes

open micursor

fetch micursor into @nombre,@direccion,@pais

while @@FETCH_STATUS=0
begin
	print 'El usuario'+space(1)+@nombre+space(1)+'con direccion'+space(1)+@direccion+space(1)+'vive en'+space(1)+@pais
	fetch micursor into @nombre,@direccion,@pais
end

close micursor
deallocate micursor





-------------------------------------------



declare @nombreproducto varchar(255)
declare @nombrecategoria varchar(255)
declare @cat varchar(255)
declare @preciounidad float
declare @totalcat float
declare @totaltotal float
declare @mediacat float
declare @mediatotal float
declare @contadorcat int
declare @contadortotal int

declare micursor cursor for
	select 
		compras.productos.nombreproducto,
		dbo.categorias.nombre_categoria,
		compras.productos.preciounidad 
	from compras.productos inner join dbo.categorias on dbo.categorias.idcategoria=compras.productos.idcategoria
	order by 2,1

open micursor
fetch micursor into @nombreproducto,@nombrecategoria,@preciounidad

set @totalcat =0
set @totaltotal =0
set @mediacat =0
set @mediatotal =0
set @contadorcat =0
set @contadortotal =0

while @@FETCH_STATUS=0
begin
	print 'Categoria: '+@nombrecategoria
	print space(2)+'Articulo Precio'
	set @cat=@nombrecategoria
	set @totalcat =0
	set @mediacat =0
	set @contadorcat =0


	while @cat=@nombrecategoria and @@FETCH_STATUS=0
	begin
		print  space(4)+cast(@nombreproducto as varchar)+' '+cast(@preciounidad as varchar)
		set @contadorcat=@contadorcat+1
		set @contadortotal=@contadortotal+1
		set @totaltotal=@totaltotal+@preciounidad
		set @totalcat=@totalcat+@preciounidad
		fetch micursor into @nombreproducto,@nombrecategoria,@preciounidad

	end
	set @mediacat=@totalcat/@contadorcat
	print  space(2)+'La media de la categoria es: '+cast(@mediacat as varchar)
end
set @mediatotal=@totaltotal/@contadortotal
print 'La media total es: '+cast(@mediatotal as varchar)
CLOSE MICURSOR
DEALLOCATE MICURSOR;
-- CATEGORIA: Cat1
-- ARTICULO	PRECIO
--   ART1	200
--   ART3	250

-- PRECIO MEDIO 225

------------------------------------------------------------------------

create  TRIGGER tr_cliente1 ON clientes INSTEAD OF INSERT 
AS  BEGIN

IF (not EXISTS(SELECT * FROM  paises WHERE pais = (SELECT pais FROM inserted)))   
BEGIN  
	INSERT INTO paises 
	SELECT pais
	FROM INSERTED
END  
	INSERT INTO clientes select * FROM INSERTED
END
go



-------------------------------------------------------------------------

alter TRIGGER tr_cliente4 ON dbo.clientes FOR DELETE
AS
BEGIN
	IF(NOT EXISTS(SELECT c.Pais FROM deleted d INNER join clientes c on d.Pais = c.Pais))
	BEGIN  
		DELETE FROM paises WHERE pais = (SELECT d.Pais FROM deleted d)
	END
END

DELETE FROM clientes WHERE Identificacion =25

select * from clientes
select * from paises


------------------------------------------------------------------------------

CREATE TRIGGER controlprecio on ventas.pedidosdeta for INSERT
AS
	IF (SELECT I.PRECIOUNIDAD FROM inserted I)<(SELECT P.PRECIOUNIDAD FROM COMPRA.PRODUCTOS P INNER JOIN inserted I ON I.idproducto=P.idproducto)
		BEGIN
			ROLLBACK TRANSACTION
			PRINT 'EL PRECIO NO ES EL ADECUADO'
		END
	ELSE
		PRINT 'EL PEDIDO FUE INGRESADO EN LA BASE DE DATOS'


-----------------------------------------------------------------------------

CREATE TRIGGER tr_cliente5 ON dbo.clientes FOR UPDATE 
AS
BEGIN
	if UPDATE (pais)
		begin
			IF(NOT EXISTS(SELECT c.Pais FROM deleted d, clientes c WHERE d.Pais = c.Pais))
				BEGIN  
					DELETE FROM paises WHERE pais IN (SELECT d.Pais FROM deleted d)
				END
		END
END 


------------------------------------------------------------

create FUNCTION dbo.productosmasvendidos_mal(@IDCLI char(5)) RETURNS TABLE
AS
	RETURN (
		SELECT TOP 5 pro.idproducto AS ID_Producto, pro.nombreproducto AS Nombre
		FROM COMPRAS.productos pro
		JOIN VENTAS.PEDIDOSDETA pedd ON pro.idproducto = pedd.idproducto
		JOIN ventas.pedidoscabe pedc ON pedd.idpedido = pedc.idpedido
		WHERE pedc.idcliente = @IDCLI
		ORDER BY pedd.cantidad DESC, pro.nombreproducto
	)
GO

SELECT * FROM dbo.productosmasvendidos_mal('NCBCK')
GO

------------------------------------------------------------
create function dbo.paisestop (@producto int)
returns @tabla table (ID char(5), Nombre varchar(80), Cantidad decimal(10,2))
as
begin
	declare @tabla2 table (ID char(5), Nombre varchar(80), Cantidad decimal(10,2))
	insert into @tabla2
		select top 3 p.idpais, p.NOMBREPAIS, sum(pd.cantidad)
		from VENTAS.paises p inner join VENTAS.clientes c on c.idpais=p.idpais
		inner join VENTAS.pedidoscabe pc on pc.idcliente=c.idcliente
		inner join VENTAS.pedidosdeta pd on pd.idpedido=pc.idpedido
		where pd.idproducto=@producto
		group by p.idpais, p.NOMBREPAIS
		order by sum(pd.cantidad) desc
	insert into @tabla
		select *
		from @tabla2
		order by Nombre
	return
end
go

select * from dbo.paisestop (1)