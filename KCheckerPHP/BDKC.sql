CREATE DATABASE KChecker;

CREATE TABLE  `address` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`estado` VARCHAR( 20 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`logradouro` VARCHAR( 50 ) NOT NULL ,
`complemento` VARCHAR( 50 ) NOT NULL ,
`cep` VARCHAR( 10 ) NOT NULL,
`dataBusca` DATE NOT NULL
); 

