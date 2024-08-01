create database sistema;

use sistema;

create table usuarios (
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null unique,
    senha varchar(32) not null
);