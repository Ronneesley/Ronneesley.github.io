create database exemplo;

use exemplo;

create table pessoas(
	id int auto_increment primary key,
    nome varchar(30) not null,
    salario decimal(10, 2)
);
