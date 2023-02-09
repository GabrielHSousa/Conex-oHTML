create database phpCrud;

use phpCrud;

create table pessoa(
 codigo int not null primary key auto_increment,
 nome varchar(50) not null,
 telefone varchar(15) not null
)engine=InnoDB;

	

select * from pessoa;