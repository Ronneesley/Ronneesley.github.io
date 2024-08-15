create database publicacao;

use publicacao;

create table animes (
    id int auto_increment primary key,
    titulo varchar(100),
    sinopse text,
    data_cadastro date
);