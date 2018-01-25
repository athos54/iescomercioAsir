/* 3 Al insertar un producto, si unidades en existencia recibido es 0, poner 1.*/
-- otra forma 
/* 3 Al insertar un producto, si unidades en existencia recibido es 0, poner 1.*/
-- otra forma 
use negocios2011
go

ALTER TRIGGER DBO.TXINSERTARPRO
ON COMPRAs.PRODUCTOS
INSTEAD OF INSERT
AS 
select * into #T from inserted
--Inserted no deja modificar
IF (SELECT unidadesenexistencia FROM inserted) = 0
begin
 update #T set unidadesenexistencia=1
 end
 INSERT INTO COMPRAs.productos SELECT * FROM  #T

