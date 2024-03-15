create view estatistica_uso as
	select 'Países' as tabela, count(*) as qtd from paises
	union
	select 'Estados' as tabela, count(*) as qtd from estados;

create view estados_por_pais as
	select 
	p.nome, count(*) as qtde_estados
	from estados as e
	inner join paises as p
	on p.id = e.pais
	group by pais;
