create database crm;

\c crm;

create table pessoas (
    id serial,
    nome varchar(200),
    telefone varchar(100),
    primary key (id)
);

create user roni with PASSWORD '123456';

GRANT ALL PRIVILEGES ON crm.pessoas TO roni;
