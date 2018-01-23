/*2 Al borrar un pais comprobar que no tiene ningun cliente asignado*/

CREATE TRIGGER controlborrapais
on venta.paises
for DELETE
AS
IF EXISTS (SELECT C.IDCLIENTE FROMventas.clientes C
WHERE C.idpais= (SELECT idpais FROM deleted))
BEGIN
ROLLBACK TRANSACTION
PRINT 'EL PAIS ESTÁ ASOCIADO Aventas.clientes Y NO SE PUEDE BORRAR'
END
ELSE
PRINT 'EL PAIS HA SIDO BORRADO CON ÉXITO'

