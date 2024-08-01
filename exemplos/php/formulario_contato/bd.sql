create database site;

use site;

create table contatos(
    id int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    assunto varchar(50) not null,
    conteudo text not null
);