SELECT top 1 ventas.clientes.idcliente, ventas.clientes.nomcliente
FROM ventas.clientes, ventas.pedidoscabe
WHERE (((Year([fechapedido]))=2013))
ORDER BY ventas.pedidoscabe.fechapedido DESC;
