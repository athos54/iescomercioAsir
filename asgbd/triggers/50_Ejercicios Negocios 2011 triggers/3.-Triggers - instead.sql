/* 3 Al insertar un producto, si unidades en existencia recibido es 0, poner 1.*/
-- otra forma 

CREATE TRIGGER TX_INSERTAR_PRODUCTO_EXISTENCIA_1_B
ON COMPRA.PRODUCTOS
INSTEAD OF INSERT
AS 
IF (SELECT unidadesenexistencia FROM inserted) = 0
BEGIN
INSERT INTO COMPRA.productos SELECT idproducto,nombreproducto,
idproveedor,idcategoria,cantxunidad,preciounidad,1,
unienpedido FROM inserted
PRINT 'SE HA INSERTADO EL PRODUCTO ACTUALIZANDO SUS UNIDADES A 1.' 
END
ELSE
BEGIN
INSERT INTO COMPRA.productos SELECT idproducto,nombreproducto,
idproveedor,idcategoria,cantxunidad,preciounidad,unidadesenexistencia,
unienpedido FROM inserted
PRINT 'SE HA INSERTADO EL PRODUCTO.'
END
