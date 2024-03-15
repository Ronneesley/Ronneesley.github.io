--
select id from pessoas 
order by id desc limit 1

--
select * from pessoas 
where salario > 1500 and 
nome like 'Mar%'

--
select nome, salario from pessoas 
order by salario asc

--
select count(*) from pessoas

--
select * from pessoas 
limit 4 offset 0

--
select min(salario), max(salario), 
avg(salario), std(salario) from pessoas
where salario > 0

--
select distinct salario from pessoas
order by salario

--
select * from extrato_social




