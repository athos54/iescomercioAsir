net stop mssql$athos

copy "F:\basededatosmsqlserver\MSSQL12.ATHOS\MSSQL\DATA\%1.mdf" F:\basededatosmsqlserver\MSSQL12.ATHOS\MSSQL\Backup\%1.mdf
copy "F:\basededatosmsqlserver\MSSQL12.ATHOS\MSSQL\DATA\%1_log.ldf" F:\basededatosmsqlserver\MSSQL12.ATHOS\MSSQL\Backup\%1.ldf

net start mssql$athos