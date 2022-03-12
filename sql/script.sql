DROP DATABASE IF EXISTS diccionario;

CREATE DATABASE diccionario;
ALTER DATABASE diccionario DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE diccionario;


CREATE TABLE palabra(
    nom_palabra VARCHAR(10),
    PRIMARY KEY (nom_palabra)
);

