net stop "SQL Server (ATHOS)"
BACKUP DATABASE %1 TO  DISK = N'F:\basededatosmsqlserver\MSSQL12.ATHOS\MSSQL\Backup\%1.bak' WITH NOFORMAT, NOINIT,  NAME = N'negocios2014-Completa Base de datos Copia de seguridad', SKIP, NOREWIND, NOUNLOAD,  STATS = 10
GO

net start "SQL Server (ATHOS)"
