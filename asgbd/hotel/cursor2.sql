-- 21.- 
-- Crear un procedimiento que recorra habitación por habitación de un tipo determinado 
-- y basándose en una función que calcule el gasto por habitación nos dé la habitación con más gasto y la menos.


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