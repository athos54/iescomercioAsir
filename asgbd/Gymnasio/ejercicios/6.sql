-- 6-	matriculasCurso: que d�ndole un id de curso devuelve su n�mero de matr�culas.

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
