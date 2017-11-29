use negocios2011 

DECLARE @MEDIO AS DECIMAL(10,2),@precio AS DECIMAL(10,2)

SELECT @MEDIO = avg(preciounidad)
FROM COMPRAS.productos 

SELECT * 
FROM COMPRAS.productos 
WHERE preciounidad> @MEDIO

select @medio 
GO