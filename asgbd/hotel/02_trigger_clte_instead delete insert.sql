create  TRIGGER tr_cliente2 ON dbo.clientes INSTEAD OF update 
AS  BEGIN
	if (not exists(SELECT * FROM inserted i, paises p 
       WHERE i.pais=p.pais))    
	BEGIN  
		INSERT INTO paises 
		SELECT pais
		FROM INSERTED
	END  
	DELETE FROM clientes
	WHERE  Identificacion =	(SELECT Identificacion FROM deleted)
	INSERT INTO clientes 
	select * 
	FROM INSERTED
END
 
GO
UPDATE [hotel].[dbo].[clientes]
   SET  Pais = 'oTRO2'
   WHERE Identificacion ='25          '
   go
select * from clientes  
GO