CREATE DATABASE IF NOT EXISTS pdo;

use pdo;

CREATE TABLE Produtos (
 id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nome VARCHAR(100) NOT NULL,
 descricao varchar(200)
); 