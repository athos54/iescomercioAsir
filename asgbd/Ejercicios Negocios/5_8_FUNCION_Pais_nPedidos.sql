create FUNCTION ventas.paisespedidos()
RETURNS TABLE
AS
RETURN (
SELECT ventas.paises.nombrepais, Count(ventas.pedidoscabe.idpedido) AS CuentaDeidpedido
FROM ventas.paises INNER JOIN ventas.clientes ON ventas.paises.idpais = ventas.clientes.idpais INNER JOIN ventas.pedidoscabe ON ventas.clientes.idcliente = ventas.pedidoscabe.idcliente
GROUP BY ventas.paises.nombrepais
HAVING Count(ventas.pedidoscabe.idpedido)>1
)
go
select * from ventas.paisespedidos()
go