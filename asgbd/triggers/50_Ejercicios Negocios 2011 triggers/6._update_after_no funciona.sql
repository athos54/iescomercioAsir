--Si tiene restriccion de foreing key no dejará insertar
-- No vale . debe ser instead 
create  TRIGGER tr_cliente_pais ON dbo.clientes 
for update,insert 
AS  BEGIN
	if not exists(select p.idpais from paises p,inserted i  
       WHERE i.idpais=p.idpais)   
	BEGIN  
		INSERT INTO ventas.paises 
		SELECT idpais,'desconocido'
		FROM INSERTED
	END  

go
UPDATE ventas.clientes  set  idpais= 'bra' where idcliente = 2;
go
select * from ventas.paises
go
select * fromventas.clientes 