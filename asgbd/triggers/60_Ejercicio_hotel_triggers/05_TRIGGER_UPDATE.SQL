USE hotel
GO
ALTER  TRIGGER tr_cliente5 ON dbo.clientes FOR UPDATE 
AS
BEGIN
if UPDATE (pais)
begin
IF(NOT EXISTS(SELECT c.Pais FROM deleted d, clientes c
	WHERE d.Pais = c.Pais))
BEGIN  
	DELETE FROM paises
	WHERE pais IN
	(SELECT d.Pais FROM deleted d)
END
END
END 
