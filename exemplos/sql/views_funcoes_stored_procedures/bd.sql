create database localidades;

use localidades;

create table paises(
	id int primary key auto_increment,
    nome varchar(100) not null
);

create table estados(
	id int primary key auto_increment,
    nome varchar(100) not null,
    pais int,
    foreign key (pais) references paises(id)
);
