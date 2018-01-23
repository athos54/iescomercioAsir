ALTER TRIGGER tr_cliente3 ON dbo.clientes INSTEAD OF INSERT, UPDATE 
AS  BEGIN
if (SELECT count(*) FROM inserted i, paises p 
       WHERE i.pais=p.pais)=0    
BEGIN  
	INSERT INTO paises 
	SELECT pais
	FROM INSERTED
END 
if (SELECT count(*) FROM deleted i)=0
-- Es Un INSERT 
BEGIN  
INSERT INTO clientes 
select * 
FROM INSERTED
end
else
begin
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

END

GO

