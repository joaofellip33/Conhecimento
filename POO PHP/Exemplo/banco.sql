create database crud;
use crud;
create table agenda(
id int not null auto_increment,
nome varchar(50) not null,
email varchar(50) not null,
contato varchar(30) not null,
primary key (id)
);

insert into agenda(id, nome, email,contato) values
(null,"teste","teste@gmail.com","99 99999 9999");

select * from agenda;