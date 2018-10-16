-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema abstract_questionnaire
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema abstract_questionnaire
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `abstract_questionnaire` DEFAULT CHARACTER SET utf8 ;
USE `abstract_questionnaire` ;

-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`research_area`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`research_area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`periodical`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`periodical` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`abstract`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`abstract` (
  `id` INT NOT NULL,
  `title` VARCHAR(500) NOT NULL,
  `content` VARCHAR(5000) NOT NULL,
  `research_area_id` INT NOT NULL,
  `periodical_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_abstract_1_idx` (`periodical_id` ASC),
  INDEX `fk_abstract_2_idx` (`research_area_id` ASC),
  CONSTRAINT `fk_abstract_1`
    FOREIGN KEY (`periodical_id`)
    REFERENCES `abstract_questionnaire`.`periodical` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_abstract_2`
    FOREIGN KEY (`research_area_id`)
    REFERENCES `abstract_questionnaire`.`research_area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`question`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`question` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(500) NOT NULL,
  `content` VARCHAR(5000) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`user` (
  `id` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `age` VARCHAR(45) NOT NULL,
  `academic_level` VARCHAR(15) NOT NULL,
  `research_branch` VARCHAR(50) NOT NULL,
  `research_field` VARCHAR(50) NOT NULL,
  `scientist_type` VARCHAR(50) NOT NULL,
  `native_language` VARCHAR(50) NOT NULL,
  `english_reading_level` VARCHAR(50) NULL,
  `english_study_time` VARCHAR(50) NULL,
  `participation_reason` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`answer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`answer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `aswer` VARCHAR(5000) NOT NULL,
  `question_id` INT NOT NULL,
  `abstract_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_answer_1_idx` (`abstract_id` ASC),
  INDEX `fk_answer_2_idx` (`question_id` ASC),
  INDEX `fk_answer_3_idx` (`user_id` ASC),
  CONSTRAINT `fk_answer_1`
    FOREIGN KEY (`abstract_id`)
    REFERENCES `abstract_questionnaire`.`abstract` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_answer_2`
    FOREIGN KEY (`question_id`)
    REFERENCES `abstract_questionnaire`.`question` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_answer_3`
    FOREIGN KEY (`user_id`)
    REFERENCES `abstract_questionnaire`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `abstract_questionnaire`.`user_abstract`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `abstract_questionnaire`.`user_abstract` (
  `id` INT NOT NULL,
  `id_user` INT NOT NULL,
  `id_abstract` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_abstract_1_idx` (`id_user` ASC),
  INDEX `fk_user_abstract_2_idx` (`id_abstract` ASC),
  CONSTRAINT `fk_user_abstract_1`
    FOREIGN KEY (`id_user`)
    REFERENCES `abstract_questionnaire`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_abstract_2`
    FOREIGN KEY (`id_abstract`)
    REFERENCES `abstract_questionnaire`.`abstract` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
