CREATE DATABASE paw;
USE paw;
CREATE TABLE usuarios(
    idusuario INT PRIMARY KEY NOT NULL,
    usuario VARCHAR(50),
    clave VARCHAR(255),
    token VARCHAR(25),
    tipo INT,
    estado INT
);