-- -----------------------------------------------------
-- Table`cliente`
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
  PRIMARY KEY (`id_cliente`)  COMMENT '');

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `new-project`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario` INT NOT NULL COMMENT '',
  `senha` VARCHAR(45) NOT NULL COMMENT '',
  `cliente_id_cliente` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_usuario`)  COMMENT '');


-- -----------------------------------------------------
-- Table `amostra`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `new-project`.`amostra` (
  `id_amostra` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario_id_usuario` INT NOT NULL COMMENT '',
  `fosforo` VARCHAR(50) NOT NULL COMMENT '',
  `materia_organica` VARCHAR(50) NOT NULL COMMENT '',
  `potencial_hidrogenionico` VARCHAR(50) NOT NULL COMMENT '',
  `potassio` VARCHAR(50) NOT NULL COMMENT '',
  `calcio` VARCHAR(50) NOT NULL COMMENT '',
  `magnesio` VARCHAR(50) NOT NULL COMMENT '',
  `acidez_total` VARCHAR(50) NOT NULL COMMENT '',
  `boro` VARCHAR(50) NOT NULL COMMENT '',
  `cobre` VARCHAR(50) NOT NULL COMMENT '',
  `ferro` VARCHAR(50) NOT NULL COMMENT '',
  `manganes` VARCHAR(50) NOT NULL COMMENT '',
  `zinco` VARCHAR(50) NOT NULL COMMENT '',
  `sodio` VARCHAR(50) NOT NULL COMMENT '',
  `aluminio` VARCHAR(50) NOT NULL COMMENT '',
  `argila` VARCHAR(50) NOT NULL COMMENT '',
  `silte` VARCHAR(50) NOT NULL COMMENT '',
  `areia` VARCHAR(50) NOT NULL COMMENT '',
  `amostracol` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id_amostra`)  COMMENT '');
