-- 3-	existeCurso : que dándole un id de curso, devuelve si existe.


use gimnasio
go

create function existeCurso (@idCurso int) returns varchar(10)
as
begin
	declare @resultado varchar(10);

	IF EXISTS(select id_curso from dbo.cursos where id_curso = @idCurso)
	BEGIN
		set @resultado='Existe';
	END
	else
	BEGIN
		set @resultado='No Existe';
	END
	return @resultado
end
GO

select dbo.existeCurso(1);
