use negocios2011 
-- select para probar
SELECT pc.idcliente , SUM(PD.PRECIOUNIDAD*PD.CANTIDAD) 
FROM ventas.pedidosdeta PD JOIN ventas.PEDIDOSCABE PC
ON PD.IDPEDIDO = PC.IDPEDIDO
group by pc.idcliente 
--
ALTER TABLE ventas.clientes
 ADD descuento DECIMAL(5,2) NULL;
GO	
DECLARE @COCLI VARCHAR(5), @TOTAL AS DECIMAL(10,2)
SET @COCLI = 'HGWIK'
SELECT @TOTAL = SUM(PD.PRECIOUNIDAD*PD.CANTIDAD) 
FROM ventas.pedidosdeta PD JOIN ventas.PEDIDOSCABE PC
ON PD.IDPEDIDO = PC.IDPEDIDO
WHERE PC.IDCLIENTE= @COCLI
IF @TOTAL > 1000.00
BEGIN
UPDATE ventas.clientes 
SET Descuento = 10.00
WHERE IDCLIENTE = @COCLI
PRINT 'Descuento 10%'
END
ELSE IF @TOTAL > 100
BEGIN
UPDATE ventas.clientes 
SET Descuento = 5.00
WHERE IDCLIENTE = @COCLI
PRINT 'Descuento 5%'
END
ELSE
begin
UPDATE ventas.clientes 
SET Descuento = 0.00
WHERE IDCLIENTE = @COCLI
PRINT 'Descuento 0%'
end
GO
