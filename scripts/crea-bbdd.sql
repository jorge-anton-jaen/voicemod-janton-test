-- BBDD scripts

CREATE SCHEMA `voicemod-janton` ;

CREATE TABLE `voicemod-janton`.`usuarios` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(100) NULL,
  `email` VARCHAR(150) NULL,
  `contrasenya` VARCHAR(20) NULL,
  `pais` VARCHAR(45) NULL,
  `telefono` INT NULL,
  `cod_postal` INT NULL,
  PRIMARY KEY (`iduser`));