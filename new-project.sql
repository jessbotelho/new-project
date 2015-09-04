-- -----------------------------------------------------
-- Table `cliente`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `new-project`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `razao_social` VARCHAR(100) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `endereco` VARCHAR(100) NOT NULL COMMENT '',
  `cep` VARCHAR(25) NOT NULL COMMENT '',
  `municipio` VARCHAR(100) NOT NULL COMMENT '',
  `estado` VARCHAR(10) NOT NULL COMMENT '',
  `tel_fixo` VARCHAR(50) NOT NULL COMMENT '',
  `tel_celular` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`id_cliente`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `new-project`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario` INT NOT NULL COMMENT '',
  `senha` VARCHAR(45) NOT NULL COMMENT '',
  `cliente_id_cliente` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_usuario`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `amostra`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `new-project`.`amostra` (
  `id_amostra` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario_id_usuario` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_amostra`)  COMMENT '')
ENGINE = InnoDB;
