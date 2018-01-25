use negocios2011 
go
alter  TRIGGER tr_cliente_pais ON dbo.clientes 
INSTEAD OF update 
AS  BEGIN
-- Nooooo !!! es instead if UPDATE (idpais) no va
	if (SELECT count(*) FROM inserted i, ventas.paises  p 
       WHERE i.idpais=p.idpais)=0    
	BEGIN  
		INSERT INTO ventas.paises 
		SELECT idpais,'desconocido'
		FROM INSERTED
	END  
UPDATE [negocios2011].[dbo].[clientes]
   SET [idcliente] = i.[idcliente]
      ,[nombrecia] = i.nombrecia
      ,[dircliente] = i.dircliente
      ,[idpais] = i.idpais 
      ,[fonocliente] = i.fonocliente
      ,[Descuento] = i.Descuento
      FROM
    [dbo].[clientes]  as cli
     INNER JOIN
    inserted as i
    ON
    cli.idcliente = i.idcliente
 END

GO
UPDATE [dbo].[clientes]
   SET  idPais = 'oTR'
   WHERE idcliente  ='2 '
   go
select * fromventas.clientes  
GO
select * from ventas.paises  