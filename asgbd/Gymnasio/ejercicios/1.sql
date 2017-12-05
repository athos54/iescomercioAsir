-- 1-	función NombreCurso, que dándole un id de curso, devuelve el nombre del curso.
use gimnasio
go

create function dbo.NombreCurso (@idCurso int) returns varchar(30)
begin
	return (select NOM_CURSO from dbo.cursos where id_curso=@idCurso);
end

select dbo.nombrecurso(1);