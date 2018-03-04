----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- COSAS DE INTERES
-- procedimiento con entrada
-- procedimiento con entrada y salida
-- procedimiento entrada por defecto
-- funcion
-- CURSOR NORMAL
-- CURSOR ANIDADO
-- TRIGGER INSTEAD OF INSERT
-- TRIGGER INSTEAD OF UPDATE
-- TRIGGER INSTEAD OF UPDATE DELETE
-- TRIGGER FOR DELETE
-- TRIGGER FOR INSERT
-- TRIGGER FOR UPDATE
-- TRY CATCH @ERROR
-- FUNCION RETURN TABLE
-- DOBLE TABLA
-- TOP 3 DE UNO EN UNO

----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- COSAS DE INTERES
CAST(@Q AS VARCHAR)
SPACE(INT)
datediff("d",rh.FechaENTRADA,rh.FechaSALIDA)
YEAR(FECHAPEDIDO)
MONTH(FECHA)
DAY(FECHA)
avg(preciounidad)
SELECT top 1
declare @ret varchar (7) ='ninguno'
select @maxdate=MAX(fechapedido)
	--PROCEDURE CON PARAMETROS CREAR
	create PROCEDURE USP_PEDIDOS_EMPLEADO
	@IDEMP INT,
	@ANIO INT = 0 ,
	@MES INT = 0,
	@NUMPED INT OUTPUT,
	@CANPED INT OUTPUT
	--PROCEDURE CON PARAMETROS EJECUTAR
	@IDEMP = 2,
	@ANIO = 2017,
	@MES = 10,
	@NUMPED = @NUMPED OUTPUT,
	@CANPED = @CANPED OUTPUT


----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------


-- procedimiento con entrada

ALTER procedure descuentoMas1000
@idCliente char(5) 
as
 begin
	declare @masMil char(2)
	declare @totalCliente float

	
	select @totalCliente=sum(preciounidad*cantidad) 
	from ventas.pedidosdeta vpd inner join ventas.pedidoscabe vpc on vpd.idpedido=vpc.idpedido 
	where vpc.idcliente='NCBCK'	

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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- procedimiento con entrada y salida
ALTER procedure descuentoMas1000
@idCliente char(5),
@masMil char(2) output
as
 begin
	declare @totalCliente float

	
	select @totalCliente=sum(preciounidad*cantidad) 
	from ventas.pedidosdeta vpd inner join ventas.pedidoscabe vpc on vpd.idpedido=vpc.idpedido 
	where vpc.idcliente='NCBCK'	

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
exec descuentoMas1000 @cliente, @masMil=@resultado

print @resultado
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- procedimiento entrada por defecto
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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- funcion
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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

--CURSOR NORMAL

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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- CURSOR ANIDADO
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


-- TRIGGER INSTEAD OF INSERT
drop trigger dbo.tr_cliente1
go

create  TRIGGER tr_cliente1 ON dbo.clientes INSTEAD OF INSERT 
AS  
BEGIN
	IF (not EXISTS(SELECT * FROM  paises WHERE pais = (SELECT pais FROM inserted)))   
	BEGIN  
		INSERT INTO paises SELECT pais FROM INSERTED
	END  
	INSERT INTO clientes select * FROM INSERTED
END
go
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- TRIGGER INSTEAD OF UPDATE
create  TRIGGER tr_cliente2 ON dbo.clientes INSTEAD OF update 
AS  BEGIN
	if (not exists(SELECT * FROM inserted i inner join paises p on i.pais=p.pais))    
	BEGIN  
		INSERT INTO paises SELECT pais FROM INSERTED
	END  
	DELETE FROM clientes WHERE  Identificacion =	(SELECT Identificacion FROM deleted)
	INSERT INTO clientes select * FROM INSERTED
END
GO

UPDATE [hotel].[dbo].[clientes] SET  Pais = 'oTRO3' WHERE Identificacion ='25'
go

select * from clientes  
select * from paises
GO
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------


-- TRIGGER INSTEAD OF UPDATE DELETE
CREATE TRIGGER tr_cliente3 ON dbo.clientes INSTEAD OF INSERT, UPDATE 
AS  BEGIN
	
	if (SELECT count(*) FROM inserted i, paises p WHERE i.pais=p.pais)=0    
		BEGIN  
			INSERT INTO paises SELECT pais FROM INSERTED
		END 
	
	if (SELECT count(*) FROM deleted i)=0
		BEGIN  
			INSERT INTO clientes select * FROM INSERTED
		end
	else
		begin
			UPDATE [hotel].[dbo].[clientes] SET   [Identificacion] = i.Identificacion,Pais = I.Pais,[Nombre] = 	I.[Nombre],[Apellido1] =I.[Apellido1],[Apellido2] = I.[Apellido2],[Direccion] = I.[Direccion],[Telefono] = I.[Telefono],[Observaciones] =I.[Observaciones] FROM	[hotel].[dbo].[clientes]  as cli INNER JOIN	inserted as i ON cli.Identificacion = i.Identificacion
		END  
END

GO
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- TRIGGER FOR DELETE
alter TRIGGER tr_cliente4 ON dbo.clientes FOR DELETE
AS
BEGIN
	IF(NOT EXISTS(SELECT c.Pais FROM deleted d INNER join clientes c on d.Pais = c.Pais))
	BEGIN  
		DELETE FROM paises WHERE pais = (SELECT d.Pais FROM deleted d)
	END
END
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- TRIGGER FOR INSERT
CREATE TRIGGER controlprecio on ventas.pedidosdeta for INSERT
AS
	IF (SELECT I.PRECIOUNIDAD FROM inserted I)<(SELECT P.PRECIOUNIDAD FROM COMPRA.PRODUCTOS P INNER JOIN inserted I ON I.idproducto=P.idproducto)
		BEGIN
			ROLLBACK TRANSACTION
			PRINT 'EL PRECIO NO ES EL ADECUADO'
		END
	ELSE
		PRINT 'EL PEDIDO FUE INGRESADO EN LA BASE DE DATOS'
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- TRIGGER FOR UPDATE
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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------


-- TRY CATCH @ERROR
BEGIN TRY
  DELETE FROM TB_CLIENTES
  WHERE IDCLIENTE = 'ALFKI'
END TRY
BEGIN CATCH
  IF @@ERROR=547
  PRINT 'NO SE PUEDE ELIMINAR ESTE CLIENTE'
END CATCH

-- NOTA: @ERROR<>0 ES QUE NO HAY ERROR (CREO)

----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- FUNCION RETURN TABLE
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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- DOBLE TABLA
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
----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------

-- TOP 3 DE UNO EN UNO
create PROCEDURE prodcaros3
@produc int output,
@produc2 int output,
@produc3 int output
as
	select top 1 @produc=idproducto
	from COMPRAS.productos 
	order by preciounidad desc

	select top 1 @produc2=idproducto
	from COMPRAS.productos 
	where  idproducto<> @produc -- AQUI ESTA LA CLAVE
	order by preciounidad desc

	select top 1 @produc3=idproducto
	from COMPRAS.productos 
	where  idproducto<> @produc 
	and  idproducto<> @produc2  -- AQUI ESTA LA CLAVE
	order by preciounidad desc

go

declare @produc int,@produc2 int,@produc3 int
exec prodcaros3
@produc=@produc output,
@produc2=@produc2 output,
@produc3=@produc3 output

----------------------------------------------------------------------------
----------------------------------------------------------------------------
----------------------------------------------------------------------------
