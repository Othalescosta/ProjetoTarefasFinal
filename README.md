# ProjetoTarefasFinal

A primeira versão do projeto consiste em criar um sistema de login que suporte as operações básicas (CRUD), possua áreas separadas para usuários e administração, integre uma API e permita aos usuários adicionar tarefas.

* codigo do mysql utilizado neste projeto *

  create database bdtarefas;
use bdtarefas;

create table tbUser(
idUser int primary key auto_increment,
email varchar(50) not null,
nome varchar(80) not null,
genero varchar(12) not null,
tipoUsu int not null);

create table tbTask(
idTask int primary key auto_increment,
nomeTask varchar(50) not null,
data date not null);

create table tbUser_Task(
idUser_Task int primary key auto_increment,
fkidUser int,
fkidTask int,
foreign key (fkidUser) references tbUser (idUser),
foreign key (fkidTask) references tbTask (idTask),
quant int not null);
