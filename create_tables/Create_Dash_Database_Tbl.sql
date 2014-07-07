USE metadash;

ALTER TABLE dash_table DROP FOREIGN KEY dash_table_ibfk_1;  /* NOTE: "drop foreign key" must specify the CONSTRAINT, not the INDEX name. */

DROP TABLE IF EXISTS dash_database;
CREATE TABLE IF NOT EXISTS dash_database (
 name VARCHAR (100), 
 descrip VARCHAR (400) NULL,
 owner CHAR(10) NULL, 
 contact_name VARCHAR(40) NULL,
 contact_email VARCHAR(100) NULL,
 contact_phone1 VARCHAR(20) NULL,
 contact_fax VARCHAR(20) NULL, 
 contact_address VARCHAR(40) NULL,
 contact_address2 VARCHAR(40) NULL,
 contact_address3 VARCHAR(40) NULL, 
 contact_city VARCHAR(30) NULL,
 contact_state CHAR(2) NULL,
 contact_zip CHAR(10) NULL,
 timeperiod VARCHAR(30) NULL,
 last_data_update datetime NULL,
 platform VARCHAR(100) NULL,
 quality VARCHAR(400) NULL,
 comments VARCHAR(1000) NULL,
 datasource char(10) NULL,
 steward varchar(100) NULL,
 date_created DATETIME NULL, 
 creator VARCHAR (20) NULL, 
 last_updated DATETIME NULL, 
 update_user VARCHAR (20) NULL, 
 exclude BIT NULL, 
 delete_row BIT NULL, 
 abbrev CHAR(10),
 hubid char(10), id bigint NOT NULL AUTO_INCREMENT, PRIMARY KEY (id) );

ALTER TABLE dash_database ADD UNIQUE KEY (abbrev);

/* --------------------------------------------------------------------------------------------------*/
INSERT INTO dash_database 
(NAME,DESCRIP,OWNER, contact_NAME,contact_PHONE,contact_FAX,contact_EMAIL, 
 contact_address,contact_address2,contact_address3,contact_CITY,contact_STATE,contact_ZIP, 
 TIMEPERIOD, LAST_DATA_UPDATE, PLATFORM,QUALITY,COMMENTS, ABBREV, DATASOURCE, STEWARD, HUBID) 
 VALUES ('Program Monitoring Tracking Application', 
 'This system collects information regarding the findings from monitoring agency programs. It tracks visit dates, programs, program status and findings.',
 'HHS', 
 'Matt Smith', 
 '312-743-2031', 
 '', 
 'matt.smith@cityofchicago.org',
 '1615 West Chicago Avenue',
 '5th floor',
 '',
 'Chicago',
 'IL',
 '60622-5127', 
 'April 2009-present', 
 '2013-04-11 14:40:00', 
 'Caspio, Access', 
 'Data is added and updated daily.',
 'The Program Monitoring Tracking Data Application was created as a web-based application using Caspio.',
 'PMNTDA',
 '','','chapin' 
) ;
/* --------------------------------------------------------------------------------------------------*/

INSERT INTO dash_database 
(NAME,DESCRIP,OWNER, contact_NAME,contact_PHONE1,contact_FAX,contact_EMAIL, 
 contact_address1,contact_address2,contact_address3,contact_CITY,contact_STATE,contact_ZIP, 
 TIMEPERIOD,LAST_DATA_UPDATE, PLATFORM,QUALITY,COMMENTS, ABBREV, DATASOURCE, STEWARD, HUBID) 
 VALUES ('Community Development Grant Application (CDGA)', 
 'The CDGA database contains information submitted by delegate agencies that have applied for funding using grant dollars available in the budget.',
 'OBM', 
 'Kelley Quinn',
 '312-744-7790',
 '',
 'Kelley.Quinn@cityofchicago.org', 
 '121 North LaSalle Street',
 'Room 604',
 '',
 'Chicago',
 'IL',
 '60602', 
 'September 2003-present', 
 '2013-09-27 15:36:04', 
 'Oracle', 
 'CDGA is a custom-built database application. Data is updated yearly during the application period. Some historical data is modified when the opportunity arises.',
 'CDGA is linked to the Chicago Budget System (CBS) for budget purposes.',
 'CDGA',
 '','','chapin' 
) ;

/* --------------------------------------------------------------------------------------------------*/

INSERT INTO dash_database 
(NAME,DESCRIP,OWNER, contact_NAME,contact_PHONE1,contact_FAX,contact_EMAIL, 
 contact_address1,contact_address2,contact_address3,contact_CITY,contact_STATE,contact_ZIP, 
 TIMEPERIOD,LAST_DATA_UPDATE, PLATFORM,QUALITY,COMMENTS, ABBREV, DATASOURCE, STEWARD, HUBID) 
 VALUES ('Capital Project Management (CPM)', 
 'The CPM database contains the budget dollars allocated towards capital projects occurring in the city over the past 15 years.',
 'OBM', 
 'Kelley Quinn',
 '312-744-7790',
 '',
 'Kelley.Quinn@cityofchicago.org', 
 '121 North LaSalle Street',
 'Room 604',
 '',
 'Chicago',
 'IL',
 '60602', 
 'September 2003-present', 
 '2013-09-27 15:40:56', 
 'Oracle', 
 'CPM is a custom-built database application. Most data that is updated is for the fiscal year. Some historical data is modified when the opportunity arises. Some data gaps occur in the CPM system due to departments not closing/completing a project using the standard system-designed process or system data was not fully available so a placeholder was entered for the data.',
 'Expenditure data is received from the Citys FMPS accounting system for projects stored in CPM.',
 'CPM',
 '','','chapin' 
) ;

/* --------------------------------------------------------------------------------------------------*/

SELECT * FROM dash_database;
