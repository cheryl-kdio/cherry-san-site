CREATE DATABASE livraison_repas;

USE livraison_repas;

CREATE TABLE restaurants (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    code_postal VARCHAR(10) NOT NULL,
    telephone VARCHAR(20) NOT NULL
);

CREATE TABLE clients (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    code_postal VARCHAR(10) NOT NULL,
    telephone VARCHAR(20) NOT NULL
);
