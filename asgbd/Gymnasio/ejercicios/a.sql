/*
a)	Crea un procedimiento para hacer una matr�cula. Se dar� el identificador del usuario y el identificador del curso en el que se matricula. Se debe controlar que tanto el usuario como el curso sean alguno de los existentes y que no se haya alcanzado el m�ximo de personas del curso. En estos casos, se mostrar� el mensaje adecuado y se impedir� la matriculaci�n.
 En la matricula la fecha de alta ser� la actual. El mes pagado ser� el actual (month from <fecha>). En pagos se pondr� el precio del curso en el que se est� matriculando.
Ten en cuenta que si se matricula por 2� vez el mismo usuario en el mismo curso se producir� un error, ya que la clave de MATRICULAS es ID_USUARIO+ID_CURSO. 
Cuando la matricula se produzca, debe mostrar el nombre del usuario y el del curso.

Ejemplos
	ejer1(5,2)	-- > El usuario no existe
	ejer1(4,8)            -- > El curso no existe
	ejer1(4,3)          --> En Pilates no hay plazas disponibles
	ejer1(40,4)	--> Luis Soria se ha matriculado en Aerocombat
*/

