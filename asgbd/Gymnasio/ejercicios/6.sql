-- 6-	matriculasCurso: que dándole un id de curso devuelve su número de matrículas.

use gimnasio
go

create function matriculasCurso (@idCurso int) returns int
as
begin
	declare @resultado char(2);
	set @resultado=(select count(*) from matriculas where id_curso=@idCurso);
	return @resultado;
end
GO

select dbo.matriculasCurso(6);
