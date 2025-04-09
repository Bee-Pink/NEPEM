CREATE DATABASE IgualdadeGenero;

USE IgualdadeGenero;

CREATE TABLE educacao_feminina (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade_alunas INT NOT NULL,
    quantidade_alunos INT NOT NULL,
    curso VARCHAR(255) NOT NULL
);



