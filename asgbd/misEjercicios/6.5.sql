-- 6.5 Mostrar en cuantos países distintos se vende un determinado producto en un año determinado.

create procedure numeroDePaisesQueSeVendeUnProducto

@numeroDePedidos int output,
@ano int = 2012,
@idproducto int = 1
as
DECLARE @t TABLE
(
  idpais char(3)
)
insert into @t 
select distinct ventas.clientes.idpais from ventas.pedidosdeta
inner join ventas.pedidoscabe on ventas.pedidoscabe.idpedido =ventas.pedidosdeta.idpedido
inner join ventas.clientes on ventas.clientes.idcliente = ventas.pedidoscabe.idcliente
where ventas.pedidosdeta.idproducto=1
and year (ventas.pedidoscabe.fechapedido)=2012
group by ventas.clientes.idpais

select @numeroDePedidos = count(*) from @t

declare @numped int
exec numeroDePaisesQueSeVendeUnProducto @numped output, @ano=2013,@idproducto=1
select @numped
