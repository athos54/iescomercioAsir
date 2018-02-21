-- 21.- 
-- Crear un procedimiento que recorra habitaci�n por habitaci�n de un tipo determinado 
-- y bas�ndose en una funci�n que calcule el gasto por habitaci�n nos d� la habitaci�n con m�s gasto y la menos.


alter procedure recorrerHabitacionesTipo @tipo int
as

	select * from habitaciones where TIPO_HABITACION=@tipo	



exec recorrerHabitacionesTipo @tipo=1



USE AdventureWorks
GO

CREATE PROCEDURE dbo.uspGetAddress @City nvarchar(30)
AS
SELECT * 
FROM Person.Address
WHERE City = @City
GO
EXEC dbo.uspGetAddress @City = 'New York'



CREATE FUNCTION gastoPorHabitacion(@numHabitacion int)  
RETURNS float
AS   
-- Returns the stock level for the product.  
BEGIN  
	declare @total float
	select @total=sum(cantidad*precio) from gastos 
	inner join reserva_habitac on gastos.idReserva=reserva_habitac.idRESERVA
	where reserva_habitac.NumHABITACION=101
	group by reserva_habitac.NumHABITACION
	return @total
END; 


select dbo.gastoPorHabitacion(101)