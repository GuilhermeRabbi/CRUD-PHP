Script para criação do Banco de Dados

Banco de Dados foi criado com finalidade de aprendizagem basica em PHP.
O banco não possui nenhuma chave estrangera por questão de "praticidade" do professor.

CREATE DATABASE 'AULA_PHP';

CREATE TABLE ALUNO (
	ID_ALUNO SERIAL PRIMARY KEY,
	NOME_ALUNO VARCHAR(255) NOT NULL,
	DATA_NASCIMENTO VARCHAR(255) NOT NULL
);

CREATE TABLE CURSOS(
	ID_CURSO SERIAL PRIMARY KEY,
	NOME_CURSO VARCHAR(255) NOT NULL;
	CARGA_HORARIO INT NOT NULL
);

CREATE TABLE ALUNOS_CURSOS(
	ID_ALUNO_CURSO SERIAL PRIMARY KEY,
	ID_ALUNO INT NOT NULL,
	ID_CURSO INT NOT NULL
);

CREATE TABLE USUARIO (
	ID_USUARIO SERIAL PRIMARY KEY,
	USUARIO VARCHAR(255) UNIQUE KEY;
	SENHA VARCHAR(255) NOT NULL
);
