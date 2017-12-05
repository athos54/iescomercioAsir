-- 4-	precioCurso : que dándole un id de curso, devuelve el precio del curso.

use gimnasio
go

create function precioCurso (@idCurso int) returns decimal(18,0)
as
begin
	declare @resultado decimal(18,0);
	select @resultado=precio from dbo.cursos where id_curso = @idCurso;
	return @resultado;
end
GO

select dbo.precioCurso(2);
