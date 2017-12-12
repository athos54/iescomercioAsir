/*
a)	Crea un procedimiento para hacer una matrícula. Se dará el identificador del usuario y el identificador del curso en el que se matricula. Se debe controlar que tanto el usuario como el curso sean alguno de los existentes y que no se haya alcanzado el máximo de personas del curso. En estos casos, se mostrará el mensaje adecuado y se impedirá la matriculación.
 En la matricula la fecha de alta será la actual. El mes pagado será el actual (month from <fecha>). En pagos se pondrá el precio del curso en el que se está matriculando.
Ten en cuenta que si se matricula por 2ª vez el mismo usuario en el mismo curso se producirá un error, ya que la clave de MATRICULAS es ID_USUARIO+ID_CURSO. 
Cuando la matricula se produzca, debe mostrar el nombre del usuario y el del curso.

Ejemplos
	ejer1(5,2)	-- > El usuario no existe
	ejer1(4,8)            -- > El curso no existe
	ejer1(4,3)          --> En Pilates no hay plazas disponibles
	ejer1(40,4)	--> Luis Soria se ha matriculado en Aerocombat
*/

