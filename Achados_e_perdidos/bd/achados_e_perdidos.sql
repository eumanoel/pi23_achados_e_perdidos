CREATE DATABASE IF NOT EXISTS cadastro_achados_perdidos;

USE cadastro_achados_perdidos;

CREATE TABLE IF NOT EXISTS usuario(
    id int not null auto_increment primary key,
    nome varchar(100) not null,
    usuario varchar(50) not null,
    senha char(40) not null
);
CREATE TABLE IF NOT EXISTS tipo_objeto(
	id int not null auto_increment primary key,
    nome text);

CREATE TABLE IF NOT EXISTS objeto(
	id int not null auto_increment primary key, 
    titulo varchar(100) not null,
    descricao varchar(500) not null,
    imagem text, 
    id_tipo_objeto int,
    data_encontrado date,
    data_devolvido date,
    foreign key (id_tipo_objeto) references tipo_objeto(id)
);    
        
insert into usuario (usuario, nome, senha) values ("manoel", "manoel edjalma", md5("123"));	
INSERT INTO tipo_objeto (nome) VALUES ('casaco');
INSERT INTO objeto (titulo, descricao, imagem, id_tipo_objeto, data_encontrado, data_devolvido)
VALUES ('casaco azul', 'Um casaco azul da nike', NULL, 1, '2023-12-13', NULL);