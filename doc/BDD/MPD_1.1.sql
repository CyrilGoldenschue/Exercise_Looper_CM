-- MySQL Script generated by MySQL Workbench
-- Thu Aug 27 15:35:24 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ExerciceLooper
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ExerciceLooper
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ExerciceLooper` DEFAULT CHARACTER SET utf8 ;
USE `ExerciceLooper` ;

-- -----------------------------------------------------
-- Table `ExerciceLooper`.`TypeValues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ExerciceLooper`.`TypeValues` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Value` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ExerciceLooper`.`Questionnaires`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ExerciceLooper`.`Questionnaires` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(45) NOT NULL,
  `State` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ExerciceLooper`.`Questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ExerciceLooper`.`Questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Label` VARCHAR(255) NOT NULL,
  `Questionnaires_id` INT NOT NULL,
  `TypeValues_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Questions_Questionnaires`
    FOREIGN KEY (`Questionnaires_id`)
    REFERENCES `ExerciceLooper`.`Questionnaires` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Questions_TypeValues`
    FOREIGN KEY (`TypeValues_id`)
    REFERENCES `ExerciceLooper`.`TypeValues` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ExerciceLooper`.`Answers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ExerciceLooper`.`Answers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Response` VARCHAR(45) NULL,
  `Date` DATETIME NOT NULL,
  `Questions_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Answers_Questions`
    FOREIGN KEY (`Questions_id`)
    REFERENCES `ExerciceLooper`.`Questions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
