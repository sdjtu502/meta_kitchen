SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `metadash` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `metadash` ;

-- -----------------------------------------------------
-- Table `metadash`.`outbound_data_request`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `metadash`.`outbound_data_request` ;

CREATE TABLE IF NOT EXISTS `metadash`.`outbound_data_request` (
  `request_date` DATE NULL,
  `data_requested` VARCHAR(100) NULL,
  `category` VARCHAR(50) NULL,
  `subcategory` VARCHAR(50) NULL,
  `requester` VARCHAR(50) NULL,
  `requester_org` VARCHAR(50) NULL,
  `requester_email` VARCHAR(50) NULL,
  `requester_phone` VARCHAR(20) NULL,
  `provider_org` VARCHAR(100) NULL,
  `provider_name` VARCHAR(20) NULL,
  `provider_email` VARCHAR(60) NULL,
  `provider_phone` VARCHAR(16) NULL,
  `need_by_date` DATE NULL,
  `description` VARCHAR(1000) NULL,
  `purpose` VARCHAR(1000) NULL,
  `data_made_public` BIT NULL,
  `data_sharing_agrmnt_status` VARCHAR(1000) NULL,
  `status` VARCHAR(20) NULL,
  `status_notes` VARCHAR(1000) NULL,
  `last_follow_up` VARCHAR(20) NULL,
  `receipt_date` DATE NULL,
  `verified_by` VARCHAR(20) NULL,
  `verified_date` DATE NULL,
  `verification_notes` VARCHAR(400) NULL,
  `re_request_date` DATE NULL,
  `data_set_abbrev` VARCHAR(20) NULL,
  `data_set` INT(6) NULL,
  `data_source_abbrev` VARCHAR(20) NULL,
  `data_source` INT(6) NULL,
  `comments` VARCHAR(500) NULL,
  `date_created` DATE NULL,
  `creator` VARCHAR(20) NULL,
  `last_updated` DATE NULL,
  `update_user` VARCHAR(20) NULL,
  `rowsource` VARCHAR(12) NULL,
  `hubid` CHAR(10) NULL,
  `orgid` CHAR(10) NULL,
  `projid` CHAR(10) NULL,
  `id` INT(8) AUTO_INCREMENT NOT NULL,
  PRIMARY KEY (`ID`)
)
ENGINE = InnoDB;

/*
INSERT INTO outbound_data_request  
 (provider_org, request_date, data_requested, requester, requester_org, requester_email, requester_phone, need_by_date, data_made_public, description, purpose, 
 status, status_notes, last_follow_up, receipt_date, verified_date, verified_by, verification_notes, comments, hubid, orgid, projid) 
 VALUES('Chicago Department of Public Health', '2011-03-08', 'Birth Records (Chicago)', 'Roopa Seshadri', 'Chapin Hall', 'rseshadri@chapinhall.org', '',
 '2014-12-31', 0, 'Birth records are needed for our project lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'INPROGRESS','', '', null, null, '', '', 'Request was sent on 3/8/2011', 'chapin', 'chapin', ''
); 

INSERT INTO outbound_data_request  
 (provider_org, request_date, data_requested, requester, requester_org, requester_email, requester_phone, need_by_date, data_made_public, description, purpose, 
 status, status_notes, last_follow_up, receipt_date, verified_date, verified_by, verification_notes, comments, hubid, orgid, projid) 
 VALUES('Chicago Department of Public Health', '2011-04-04', 'Death Records (Chicago)', 'Roopa Seshadri', 'Chapin Hall', 'rseshadri@chapinhall.org', '',
 '2014-12-31', 0, 'Death records are needed for our project lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'INPROGRESS','', '', null, null, '', '', 'Request was sent on 4/11/2011', 'chapin', 'chapin', ''
); 

INSERT INTO outbound_data_request  
 (provider_org, request_date, data_requested, requester, requester_org, requester_email, requester_phone, need_by_date, data_made_public, description, purpose, 
 status, status_notes, last_follow_up, receipt_date, verified_date, verified_by, verification_notes, comments, hubid, orgid, projid) 
 VALUES('Chicago Police Department', '2011-07-22', 'Arrests 1999-present (Chicago)', '', 'Chapin Hall', '', '',
 '2014-12-31', 0, 'Arrest records are needed for our project lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 
 'INPROGRESS','', '', null, null, '', '', 'Request was sent on 7/22/2011', 'chapin', 'chapin', ''
); 
*/

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

/* -------------------------------------------------------------------------------- */

SELECT * FROM outbound_data_request  ORDER BY Requester, Request_Date;
