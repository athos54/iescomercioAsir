-- 2-	existeUsuario: que dándole idUsuario, devuelve si existe.

use gimnasio
go

alter function existeUsuario (@idUsuario int) returns varchar(10)
as
begin
	declare @resultado varchar(10);

	IF EXISTS(select id_usuario from dbo.usuarios where id_usuario = @idUsuario)
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

select dbo.existeUsuario(476575);
