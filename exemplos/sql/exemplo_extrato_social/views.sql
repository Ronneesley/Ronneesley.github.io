--
create view extrato_social as
	select count(*) as qtde, classe from pessoas_com_classe
	group by classe
	order by classe;

--
create view pessoas_com_classe as
	select *, 
	if(salario > 5000, 'Classe alta', 
		if (salario > 1000, 'Classe média', 'Classe baixa') ) 
        as classe
	from pessoas
	order by salario;
