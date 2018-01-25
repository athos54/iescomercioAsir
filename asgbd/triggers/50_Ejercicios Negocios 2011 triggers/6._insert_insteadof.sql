use negocios2011 
go
alter  TRIGGER tr_cliente_pais_inser ON dbo.clientes
INSTEAD OF insert 
AS  BEGIN
begin
	if (SELECT count(*) FROM inserted i, ventas.paises  p 
       WHERE i.idpais=p.idpais)=0    
	BEGIN  
		INSERT INTO ventas.paises 
		SELECT idpais,'desconocido'
		FROM INSERTED
	END  
INSERT INTO ventas.clientes 
select * 
FROM INSERTED
END

END
GO
INSERT INTO ventas.clientes  VALUES ('21', 'nom21', 'dir21',  'pa1','12345',10);
   go
select * fromventas.clientes  
GO
select * from ventas.paises  