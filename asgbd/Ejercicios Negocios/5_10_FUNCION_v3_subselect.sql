alter function ventas.productos1(@CLI varchar(5))returns table
as
return(
select top 5 productos.idproducto, nombreproducto, sum(cantidad) as cantidad 
from compras.productos, VENTAS.pedidosdeta
where productos.idproducto=pedidosdeta.idproducto 
and pedidosdeta.idproducto in
  (select top 5 idproducto  
  from ventas.clientes, ventas.pedidosdeta, ventas.pedidoscabe 
  where clientes.idcliente=pedidoscabe.idcliente and pedidosdeta.idpedido=pedidoscabe.idempleado and pedidoscabe.idcliente=@CLI
  group by pedidosdeta.idproducto, pedidosdeta.idproducto
  order by sum(cantidad) desc)  
group by compras.productos.idproducto,nombreproducto 
order by productos.nombreproducto asc)
go
select * from ventas.productos1('HGWIK')