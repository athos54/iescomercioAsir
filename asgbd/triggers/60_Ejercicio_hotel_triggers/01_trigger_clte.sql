alter  TRIGGER tr_cliente1 ON dbo.clientes INSTEAD OF INSERT 
AS  BEGIN

IF (not EXISTS(SELECT * FROM  paises WHERE pais = (SELECT pais FROM inserted)))   
BEGIN  
	INSERT INTO paises 
	SELECT pais
	FROM INSERTED
END  
INSERT INTO clientes 
select * 
FROM INSERTED
END
go
INSERT INTO  clientes  VALUES ('25', 'ESPAÑA3', 'Felipe', 'Iglesias', 'López', 'Avda Los Castros, 44', '942344444', 'Buen cliente');
go
select * from paises
select * from clientes 