SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `metadash` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `metadash` ;

-- -----------------------------------------------------
-- Table `metadash`.`inbound_data_request`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `metadash`.`inbound_data_request` ;

CREATE TABLE IF NOT EXISTS `metadash`.`inbound_data_request` (
  `request_date` DATE NULL,
  `data_requested` VARCHAR(50) NULL,
  `requester` VARCHAR(50) NULL,
  `requester_org` VARCHAR(50) NULL,
  `requester_email` VARCHAR(50) NULL,
  `requester_phone` VARCHAR(20) NULL,
  `need_by_date` DATE NULL,
  `descrip` VARCHAR(1000) NULL,
  `purpose` VARCHAR(1000) NULL,
  `detailed_instructions` VARCHAR(5000) NULL,
  `sources` VARCHAR(1000) NULL,
  `data_made_public` BIT NULL,
  `difficulty_score` INT NULL,
  `importance_score` INT NULL,
  `cost_score` INT NULL,
  `status` VARCHAR(30) NULL,
  `status_notes` VARCHAR(1000) NULL,
  `comments` VARCHAR(500) NULL,
  `date_created` DATE NULL,
  `creator` VARCHAR(20) NULL,
  `last_updated` DATE NULL,
  `update_user` VARCHAR(20) NULL,
  `hubid` CHAR(10) NULL,
  `orgid` CHAR(10) NULL,
  `projid` CHAR(10) NULL,
  `id` INT(8) AUTO_INCREMENT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `difficulty_score` (`difficulty_score` ASC),
  INDEX `importance_score` (`importance_score` ASC)
)
ENGINE = InnoDB;

INSERT INTO inbound_data_request  
 (request_date, data_requested, requester, requester_org, requester_email, requester_phone, need_by_date, data_made_public, descrip, purpose, sources, difficulty_score, importance_score, status, comments, hubid, orgid, projid) 
 VALUES('2013-11-04', 'Teacher qualifications', 'Carolyn Newberry-Schwartz', 'Collaboration for Early Childhood', 'cnewberry@collab4kids.org', '708-613-6122',
 '2014-12-31', 0, 'Percent of teachers and directors in Oak Park and River Forest early childhood programs who have above minimum state educational requirements for their role. Percent of teachers and child care providers who have more than the state mandated 15 documented hours of continuing professional development each year.', 
 'The Collaboration works to increase the professional qualifications and skills of early care and education teachers and family child care providers through participation in professional development activities, college-level classes, and statewide quality enhancement initiatives like Great START, Quality Rating System and Gateways to Opportunity. The Collaboration fosters professional communities through its Directors Round Table and Family Child Care Provider Round Table.', 
 'ISBE teacher accreditation data',
 4, 8, 'Accepted - In Progress', 'Request was sent to ISBE on 1-1-2012', 'chapin', 'chapin', ''
); 

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

/* -------------------------------------------------------------------------------- */

SELECT * FROM inbound_data_request  ORDER BY Requester, Request_Date;

