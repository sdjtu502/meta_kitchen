USE metadash;

DROP TABLE IF EXISTS document;

CREATE TABLE document (
data_source char(12) NULL,
data_set char(12) NULL,
url varchar(200) NULL, 
descrip varchar(200) NULL,
date_created date NULL,
last_updated date NULL
);

LOAD DATA INFILE 'C:/xampp/htdocs/dash/load/dash/DashDocuments.csv' 
INTO TABLE document    
FIELDS TERMINATED BY ','        #'\t'      #',' OPTIONALLY ENCLOSED BY '"'
IGNORE 1 LINES ;

ALTER TABLE document DROP COLUMN data_source;
ALTER TABLE document DROP COLUMN data_set;

ALTER TABLE document ADD COLUMN doc_author varchar(30) NULL;

ALTER TABLE document ADD COLUMN creator varchar(12) NULL;
ALTER TABLE document ADD COLUMN update_user varchar(12) NULL;
ALTER TABLE document ADD COLUMN exclude bit NULL;
ALTER TABLE document ADD COLUMN delete_row bit NULL;
ALTER TABLE document ADD COLUMN hubid varchar(12) NULL;
ALTER TABLE document ADD COLUMN orgid varchar(12) NULL;
ALTER TABLE document ADD COLUMN projid varchar(12) NULL;

ALTER TABLE document ADD id INT PRIMARY KEY AUTO_INCREMENT;

UPDATE document SET creator='gsanders';
UPDATE document SET update_user='gsanders';
UPDATE document SET hubid='chapinhall';
UPDATE document SET orgid='chapinhall';

SELECT * FROM document;
