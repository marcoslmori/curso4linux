/* schema do projeto == aula04 */

/* remover a base aula4 */
DROP DATABASE Aula04;

/* criar a base novamente zerada */
CREATE DATABASE Aula04;

/* */
USE Aula04;

/* criacao da tabela de usuarios */
CREATE TABLE usuarios (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	senha VARCHAR(100) NOT NULL
);

/* criacao de tabela para registrar o login do usuarios */
CREATE TABLE logs (
	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario_id INT,
	login_data TIMESTAMP,
	acao VARCHAR(100) NOT NULL,

	FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
); 

/* para casa fazer o logout */
