USE negocios2011
GO

create FUNCTION dbo.productosmasvendidos_mal(@IDCLI char(5))
RETURNS TABLE
AS

RETURN SELECT TOP 5 pro.idproducto AS ID_Producto, pro.nombreproducto AS Nombre
FROM COMPRAS.productos pro
JOIN VENTAS.PEDIDOSDETA pedd ON pro.idproducto = pedd.idproducto
JOIN ventas.pedidoscabe pedc ON pedd.idpedido = pedc.idpedido
WHERE pedc.idcliente = @IDCLI
ORDER BY pedd.cantidad DESC, pro.nombreproducto
GO

SELECT * FROM dbo.productosmasvendidos_mal('NCBCK')
GO
