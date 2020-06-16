
create database db_projeto_php;
use db_projeto_php;


CREATE TABLE usuarios (
    id_usuario INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(20) NOT NULL
    );
    INSERT INTO usuarios(nome,email,senha) VALUES
        ('admin','admin@gmail.com','admin');
        


CREATE TABLE alunos (
    id_aluno INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(90) NOT NULL,
    curso VARCHAR(90) NOT NULL,
	telefone varchar(90) NOT NULL,
    email VARCHAR(90) NOT NULL,
	sexo VARCHAR(30) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    senha VARCHAR(30) NOT NULL
);
      
 INSERT INTO alunos(nome,curso,telefone,email,sexo,cidade,estado,senha) VALUES
        ('Rogerio','TADS','874634','rogerio@gmail.com','M','BRASILIA','DF','123');
        
select * from alunos;
delete from alunos where id_aluno=3;

