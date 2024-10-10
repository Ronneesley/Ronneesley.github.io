create database publicacao;

use publicacao;

create table generos (
    id int auto_increment primary key,
    nome varchar(200) not null
);

create table animes (
    id int auto_increment primary key,
    titulo varchar(100),
    sinopse text,
    genero int not null,
    data_cadastro date,
    foreign key (genero) references generos(id)
);