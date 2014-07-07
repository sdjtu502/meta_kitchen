USE metadash;

/* ALTER TABLE dash_database DROP FOREIGN KEY dash_database_ibfk_1;  /* NOTE: "drop foreign key" must specify the CONSTRAINT, not the INDEX name. */

DROP TABLE IF EXISTS dash_owner;
CREATE TABLE IF NOT EXISTS dash_owner (
 name VARCHAR (100), 
 descrip VARCHAR (400) NULL, 
 abbrev CHAR(10) NULL, 
 date_created DATETIME NULL, creator VARCHAR (20) NULL, last_updated DATETIME NULL, update_user VARCHAR (20) NULL, exclude BIT NULL, delete_row BIT NULL, 
 comments VARCHAR(1000) NULL, hubid CHAR(10),
 id bigint NOT NULL AUTO_INCREMENT, PRIMARY KEY (id) );

ALTER TABLE dash_owner ADD UNIQUE KEY (abbrev);

/* --------------------------------------------------------------------------------------------------*/
INSERT INTO dash_owner 
(NAME,DESCRIP,COMMENTS,ABBREV,HUBID) 
 VALUES ('Department of Health and Human Services', '', '', 'CHHHS', 'chicago') ;

INSERT INTO dash_owner 
(NAME,DESCRIP,COMMENTS,ABBREV,HUBID) 
 VALUES ('Office of Budget and Management', '', '', 'CHOBM', 'chicago') ;

INSERT INTO dash_owner 
(NAME,DESCRIP,COMMENTS,ABBREV,HUBID) 
 VALUES ('Department of Family and Support Services', '', '', 'CHDFSS', 'chicago') ;

/* --------------------------------------------------------------------------------------------------*/

SELECT * FROM dash_owner;
