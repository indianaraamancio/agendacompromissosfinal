CREATE DATABASE agenda;
CREATE TABLE IF NOT EXISTS `agenda`.`relacoes` (
  `idRelacao` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRelacao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`pessoas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`pessoas` (
  `idPessoa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `foto` VARCHAR(255) NOT NULL,
  `relacoes_idRelacao` INT NOT NULL,
  PRIMARY KEY (`idPessoa`),
  INDEX `fk_pessoas_relacoes1_idx` (`relacoes_idRelacao` ASC) ,
  CONSTRAINT `fk_pessoas_relacoes1`
    FOREIGN KEY (`relacoes_idRelacao`)
    REFERENCES `agenda`.`relacoes` (`idRelacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`usuarios` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `senha` CHAR(32) NOT NULL,
  `nivel` TINYINT NOT NULL COMMENT '1- Secretária / 2- Executivo',
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`tiposCompromissos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`tiposCompromissos` (
  `idTipo` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idTipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`agendarCompromissos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`agendarCompromissos` (
  `idAgendamento` INT NOT NULL AUTO_INCREMENT,
  `dataInicio` DATE NOT NULL,
  `dataFim` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `rua` VARCHAR(255) NULL,
  `bairro` VARCHAR(255) NULL,
  `cidade` VARCHAR(255) NULL,
  `estado` VARCHAR(45) NULL,
  `cep` BIGINT NULL,
  `numero` INT NULL,
  `observacao` VARCHAR(255) NULL,
  `tiposCompromissos_idTipo` INT NOT NULL,
  PRIMARY KEY (`idAgendamento`),
  INDEX `fk_agendarCompromissos_tiposCompromissos1_idx` (`tiposCompromissos_idTipo` ASC) ,
  CONSTRAINT `fk_agendarCompromissos_tiposCompromissos1`
    FOREIGN KEY (`tiposCompromissos_idTipo`)
    REFERENCES `agenda`.`tiposCompromissos` (`idTipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda`.`pessoas_has_agendarCompromissos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`pessoas_has_agendarCompromissos` (
  `pessoas_idPessoa` INT NOT NULL,
  `agendarCompromissos_idAgendamento` INT NOT NULL,
  PRIMARY KEY (`pessoas_idPessoa`, `agendarCompromissos_idAgendamento`),
  INDEX `fk_pessoas_has_agendarCompromissos_agendarCompromissos1_idx` (`agendarCompromissos_idAgendamento` ASC) ,
  INDEX `fk_pessoas_has_agendarCompromissos_pessoas1_idx` (`pessoas_idPessoa` ASC) ,
  CONSTRAINT `fk_pessoas_has_agendarCompromissos_pessoas1`
    FOREIGN KEY (`pessoas_idPessoa`)
    REFERENCES `agenda`.`pessoas` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoas_has_agendarCompromissos_agendarCompromissos1`
    FOREIGN KEY (`agendarCompromissos_idAgendamento`)
    REFERENCES `agenda`.`agendarCompromissos` (`idAgendamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

