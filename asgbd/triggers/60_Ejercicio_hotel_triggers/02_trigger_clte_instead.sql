ALTER  TRIGGER tr_cliente2 ON dbo.clientes INSTEAD OF update 
AS  BEGIN
	if not exists(SELECT * FROM inserted i, paises p 
       WHERE i.pais=p.pais)    
	BEGIN  
		INSERT INTO paises 
		SELECT pais
		FROM INSERTED
	END  
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

GO
UPDATE [hotel].[dbo].[clientes]
   SET  Pais = 'oTRO2'
   WHERE Identificacion ='12345       '
   go
select * from clientes  
GO