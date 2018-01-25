/*6.- Al insertar o modificar un Cliente, si no existe un país crearlo con nombre desconocido.*/

create TRIGGER EJERCICIO6 ON ventas.clientes
INSTEAD OF INSERT, UPDATE
AS
IF (SELECT idpais from inserted) NOT IN (select idpais from ventas.paises)
	BEGIN
		INSERT into ventas.paises values ((select idpais from inserted), 'Desconocido')
		PRINT 'El Pais no existia. Ha sido agregado a la tabla paises.' 
	END
IF EXISTS (select * from deleted)
	BEGIN
		update ventas.clientes set idcliente=i.idcliente, NOMBRECIA=i.NOMBRECIA, DIRECCION=i.DIRECCION, idpais=i.idpais, fonocliente=i.fonocliente 
		FROM ventas.clientes as cli INNER JOIN inserted as i ON cli.idcliente = i.idcliente
	END
ELSE 
    INSERT INTO ventas.clientes select * from inserted

begin
	PRINT 'Los datos se han introducido correctamente'
END
GO