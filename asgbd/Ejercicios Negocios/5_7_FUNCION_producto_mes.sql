create FUNCTION DBO.productosmes(@Y INT)
RETURNS TABLE
AS
-- Poner top 1000 , sino no funciona
RETURN (SELECT top 1000 p.nombreproducto ,
month(pc.fechapedido) as mes ,
sum(PD.PRECIOUNIDAD * PD.cantidad)  AS "total"
FROM ventas.PEDIDOSCABE PC
JOIN VENTAS.PEDIDOSDETA PD ON PC.IDPEDIDO=PD.IDPEDIDO
JOIN COMPRAS.PRODUCTOS P ON PD.IDPRODUCTO=P.IDPRODUCTO
WHERE YEAR(FECHAPEDIDO)  = @Y
group by p.nombreproducto,month(pc.fechapedido)
order by 3 desc)
GO
-- EJECUTANDO LA FUNCION
SELECT * FROM DBO.productosmes(2017)
GO