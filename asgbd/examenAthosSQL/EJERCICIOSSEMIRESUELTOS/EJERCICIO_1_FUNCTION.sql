CREATE FUNCTION DBO.FUNCION1 (@HABITACION INT) RETURNS @TABLA TABLE (IDCLIENTE CHAR(5),NOMBRE VARCHAR(30))
AS
BEGIN
INSERT INTO @TABLA
	SELECT TOP 1 C.IDENTIFICACION,C.NOMBRE
	FROM DBO.CLIENTES C INNER JOIN DBO.reserva_habitac RH ON C.Identificacion=RH.CLIENTE
	where RH.NumHABITACION=@HABITACION
	ORDER BY FECHAENTRADA DESC

if not exists(select * from @TABLA )
	insert into @TABLA VALUES (0,'NO EXISTE');
RETURN

SELECT DBO.FUNCION1(102)



 



	
	SELECT * FROM DBO.reserva_habitac
	SELECT * FROM DBO.reserva_habitac