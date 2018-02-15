

declare @nombreproducto varchar(255)
declare @nombrecategoria varchar(255)
declare @cat varchar(255)
declare @preciounidad float
declare @totalcat float
declare @totaltotal float
declare @mediacat float
declare @mediatotal float
declare @contadorcat int
declare @contadortotal int

declare micursor cursor for
	select 
		compras.productos.nombreproducto,
		dbo.categorias.nombre_categoria,
		compras.productos.preciounidad 
	from compras.productos inner join dbo.categorias on dbo.categorias.idcategoria=compras.productos.idcategoria
	order by 2,1

open micursor
fetch micursor into @nombreproducto,@nombrecategoria,@preciounidad

set @totalcat =0
set @totaltotal =0
set @mediacat =0
set @mediatotal =0
set @contadorcat =0
set @contadortotal =0

while @@FETCH_STATUS=0
begin
	print 'Categoria: '+@nombrecategoria
	print space(2)+'Articulo Precio'
	set @cat=@nombrecategoria
	set @totalcat =0
	set @mediacat =0
	set @contadorcat =0


	while @cat=@nombrecategoria and @@FETCH_STATUS=0
	begin
		print  space(4)+cast(@nombreproducto as varchar)+' '+cast(@preciounidad as varchar)
		set @contadorcat=@contadorcat+1
		set @contadortotal=@contadortotal+1
		set @totaltotal=@totaltotal+@preciounidad
		set @totalcat=@totalcat+@preciounidad
		fetch micursor into @nombreproducto,@nombrecategoria,@preciounidad

	end
	set @mediacat=@totalcat/@contadorcat
	print  space(2)+'La media de la categoria es: '+cast(@mediacat as varchar)
end
set @mediatotal=@totaltotal/@contadortotal
print 'La media total es: '+cast(@mediatotal as varchar)
CLOSE MICURSOR
DEALLOCATE MICURSOR;
-- CATEGORIA: Cat1
-- ARTICULO	PRECIO
--   ART1	200
--   ART3	250

-- PRECIO MEDIO 225

