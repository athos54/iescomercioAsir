-- 5-	estaMatriculado : que d�ndole un id de curso y idUsuario, devuelve si est� matriculado.

use gimnasio
go

alter function estaMatriculado (@idUsuario int,@idCurso int) returns char(2)
as
begin
	declare @resultado char(2);
	if exists(select * from matriculas where id_usuario=@idUsuario and id_curso=@idCurso)
		set @resultado='si';
	else
		set @resultado='no';
	return @resultado;
end
GO

select dbo.estaMatriculado(4,6);
