DROP DATABASE IF EXISTS db_usuarios;

CREATE DATABASE db_usuarios
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

USE db_usuarios;

CREATE TABLE users (
    in_user       INT NOT NULL AUTO_INCREMENT, 
    name_user     VARCHAR(30) NOT NULL, 
    email_user    VARCHAR(40) NOT NULL UNIQUE, 
    password_user VARCHAR(128) NOT NULL, 
    title_user    VARCHAR(74) NOT NULL, 
    code_user     VARCHAR(40) NOT NULL, 
    PRIMARY KEY (in_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;