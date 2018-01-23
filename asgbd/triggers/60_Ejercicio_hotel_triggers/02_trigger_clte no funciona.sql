-- no funciona hacer con instead
create  TRIGGER tr_cliente2_b ON dbo.clientes for update 
AS  BEGIN
if UPDATE (pais)
begin
	if (SELECT count(*) FROM inserted i, paises p 
       WHERE i.pais=p.pais)=0    
	BEGIN  
		INSERT INTO paises 
		SELECT pais
		FROM INSERTED
	END  
end
select * 
FROM INSERTED
END
go
UPDATE  clientes  set VALUES ('1251', 'ESPAÑA3', 'Felipe', 'Iglesias', 'López', 'Avda Los Castros, 44', '942344444', 'Buen cliente');
go
select * from paises
go
select * from clientes 