SELECT p.nombreproducto ,
month(pc.fechapedido) as mes ,
sum(PD.PRECIOUNIDAD * PD.cantidad)  AS "total"
FROM ventas.PEDIDOSCABE PC
JOIN VENTAS.PEDIDOSDETA PD ON PC.IDPEDIDO=PD.IDPEDIDO
JOIN COMPRAS.PRODUCTOS P ON PD.IDPRODUCTO=P.IDPRODUCTO
WHERE YEAR(FECHAPEDIDO) = 2013
group by p.nombreproducto,month(pc.fechapedido)
order by 3 desc