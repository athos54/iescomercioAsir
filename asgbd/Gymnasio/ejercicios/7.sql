-- 7-	cursoCompleto : que dándole un id de curso devuelve si está completo.

use gimnasio
go

alter function cursoCompleto (@idCurso int) returns varchar(30)
as
begin
	declare @personasMaximasDelCurso decimal(18);
	declare @personasMatriculadas decimal(18);
	declare @resultado varchar(30);

	set @personasMaximasDelCurso =(select max_per from cursos where id_curso=@idCurso);
	set @personasMatriculadas= (select dbo.matriculasCurso(@idcurso));
	if @personasMaximasDelCurso<@personasMatriculadas
		set @resultado='Completo'
	else
			set @resultado='Quedan plazas'
	return @resultado;
end
GO

select dbo.cursoCompleto(7);
