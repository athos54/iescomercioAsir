-- no funciona. Al no haber pais no se puede insertar
alter  TRIGGER tr_cliente1 ON dbo.clientes for INSERT 
AS  BEGIN

if (SELECT count(*) FROM inserted i, paises p 
       WHERE i.pais=p.pais)=0    
BEGIN  
	begin transaction
	INSERT INTO paises 
	SELECT pais
	FROM INSERTED
	commit transaction
END  
end
go

INSERT INTO  clientes  VALUES ('9', 'ESPAÑA1442', 'Felipe', 'Iglesias', 'López', 'Avda Los Castros, 44', '942344444', 'Buen cliente');
go
select * from paises