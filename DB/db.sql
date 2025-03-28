create database biblioteca;
use biblioteca;
create table livros(
	id int not null auto_increment,
    titulo varchar(250) not null,
    autor varchar(250) not null,
    genero varchar(100) not null,
    sinopse text not null,
    ano date not null,
    data_obtencao date not null,
    primary key(id)
);
select * from livros;