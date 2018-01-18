USE hotel
GO

CREATE  TRIGGER tr_cliente4 ON dbo.clientes FOR DELETE
AS
BEGIN

IF(NOT EXISTS(SELECT c.Pais FROM deleted d, clientes c
	WHERE d.Pais = c.Pais))
BEGIN  
	DELETE FROM paises
	WHERE pais IN
	(SELECT d.Pais FROM deleted d)
END
END

DELETE FROM clientes 
	WHERE Identificacion =1251