USE hotel
GO
ALTER TRIGGER tr_cliente3 ON dbo.clientes INSTEAD OF INSERT, UPDATE ,DELETE
AS  BEGIN
DECLARE @CLIBO AS VARCHAR(12);
DECLARE @CLIIN AS VARCHAR(12);
SELECT @CLIBO=IDENTIFICACION FROM deleted;
SELECT @CLIIN=IDENTIFICACION FROM inserted;
--select @CLIIN,@CLIBO -- Solo para probar
if (SELECT count(*) FROM inserted i, paises p 
       WHERE i.pais=p.pais)=0    
BEGIN  
	INSERT INTO paises 
	SELECT pais
	FROM INSERTED
END 

if (@CLIBO IS NULL)
-- Es Un INSERT  
BEGIN  
INSERT INTO clientes 
select * 
FROM INSERTED
end
else
begin
if (@CLIIN IS NULL) -- Es DELETED
begin
--ES UN DELETE
DELETE [hotel].[dbo].[clientes] WHERE Identificacion = @CLIBO ;
end
ELSE
UPDATE [hotel].[dbo].[clientes]
   SET   [Identificacion] = i.Identificacion
      ,Pais = I.Pais
      ,[Nombre] = 	I.[Nombre]
      ,[Apellido1] =I.[Apellido1]
      ,[Apellido2] = I.[Apellido2]
      ,[Direccion] = I.[Direccion]
      ,[Telefono] = I.[Telefono]
      ,[Observaciones] =I.[Observaciones] 
   
   FROM
    [hotel].[dbo].[clientes]  as cli  
     INNER JOIN
    inserted as i
    ON
    cli.Identificacion = i.Identificacion
END  
IF(SELECT count(*)  FROM deleted d, clientes c
	WHERE d.Pais = c.Pais) = 1 -- probar 0 cuidado tabla original 
BEGIN  
	DELETE FROM paises
	WHERE pais IN
	(SELECT d.Pais FROM deleted d)
END

END

GO
delete clientes where Identificacion = 99
go
