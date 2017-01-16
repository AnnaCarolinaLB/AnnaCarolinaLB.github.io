CREATE SCHEMA ger_tarefas;

CREATE TABLE  `ger_tarefas`.`tarefas` (
 `id` INT( 100 ) NOT NULL AUTO_INCREMENT ,
 `data` DATE NOT NULL ,
 `tarefa` LONGTEXT NOT NULL ,
 `urgente` CHAR( 3 ) NOT NULL ,
 `responsavel` CHAR( 50 ),
 `status` CHAR( 50 ) NOT NULL ,
PRIMARY KEY (`id`)
);
