create database CRUD;
use CRUD;
-- drop database CRUD;
create table tipo (
id_tipo int not null auto_increment,
descricao varchar(50) not null,
primary key (id_tipo)
);

create table produto(
id_produto int not null auto_increment,
nome varchar(50) not null,
marca varchar(50) not null,
preco decimal(10,2) not null,
primary key(id_produto)
);

create table usuario(
id_usuario int not null auto_increment,
nome varchar(50) not null,
email varchar(100) unique not null,
senha varchar(110) not null,
tipo_usuario int not null,
primary key(id_usuario),
foreign key (tipo_usuario) references tipo(id_tipo)
);

create table venda (
id_venda int not null auto_increment,
id_usuario_venda int not null,
id_produto_venda int not null,
primary key(id_venda),
foreign key (id_usuario_venda) references usuario (id_usuario),
foreign key (id_produto_venda) references produto (id_produto)
);

insert into tipo(id_tipo, descricao) values
(null, "administrador"),
(null, "moderador"),
(null, "comum");

insert into produto(id_produto, nome, marca, preco) values
(null, "sabao", "ype", 4.99 ),
(null, "detergente", "minuano", 1.99 ),
(null, "pretin", "car", 7.50 ),
(null, "sabonete", "bela", 7.99 ),
(null, "chocolate", "garoto", 10.99 );

insert into usuario(id_usuario, nome, email, senha, tipo_usuario) values
(null, "nelso","nelso@gmail.com","12345",1),
(null, "patrik","patrik@gmail.com","12345",2),
(null, "bruno","bruno@gmail.com","12345",3),
(null, "renato","renato@gmail.com","12345",3),
(null, "maria","maria@gmail.com","12345",3),
(null, "joao","joao@gmail.com","12345",3),
(null, "mario","mario@gmail.com","12345",3);

insert into venda(id_venda, id_usuario_venda, id_produto_venda) values
(null,2,3),
(null,3,1),
(null,1,4),
(null,4,5),
(null,5,1),
(null,5,2),
(null,5,3),
(null,5,4);

insert into usuario(id_usuario, nome, email, senha, tipo_usuario) values (null, 'mario','mario@gmail.com','12345',3);

select * from tipo;
select * from produto;
select * from usuario;
select * from venda;

select id_venda, usuario.nome, produto.nome from venda
inner join usuario
on id_usuario = id_usuario_venda
inner join produto
on id_produto = id_produto_venda
where id_usuario = 5;  

-- produto.nome in('sabonete');

delete from usuario where id_usuario = 1;
update tipo set id_tipo = 1 where id_tipo = 2;