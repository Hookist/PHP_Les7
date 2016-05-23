SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`User` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `UserName` VARCHAR(45) NOT NULL ,
  `Password` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `UserName_UNIQUE` (`UserName` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT ,
  `CategoryName` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCategory`) ,
  UNIQUE INDEX `idCategory_UNIQUE` (`idCategory` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Post`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Post` (
  `idPost` INT NOT NULL AUTO_INCREMENT ,
  `PostName` VARCHAR(45) NOT NULL ,
  `User_id` INT NOT NULL ,
  PRIMARY KEY (`idPost`) ,
  UNIQUE INDEX `idPost_UNIQUE` (`idPost` ASC) ,
  INDEX `User_id_idx` (`User_id` ASC) ,
  CONSTRAINT `User_id`
    FOREIGN KEY (`User_id` )
    REFERENCES `mydb`.`User` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Category_Post`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Category_Post` (
  `idCategory_Post` INT NOT NULL AUTO_INCREMENT ,
  `Category_Id` INT NOT NULL ,
  `Post_Id` INT NOT NULL ,
  PRIMARY KEY (`idCategory_Post`) ,
  UNIQUE INDEX `idCategory_Post_UNIQUE` (`idCategory_Post` ASC) ,
  INDEX `Category_Id_idx` (`Category_Id` ASC) ,
  INDEX `Post_Id_idx` (`Post_Id` ASC) ,
  CONSTRAINT `Category_Id`
    FOREIGN KEY (`Category_Id` )
    REFERENCES `mydb`.`Category` (`idCategory` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Post_Id`
    FOREIGN KEY (`Post_Id` )
    REFERENCES `mydb`.`Post` (`idPost` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
