USE metadash;

DROP TABLE IF EXISTS datadict_row;

CREATE TABLE datadict_row
(
column_name varchar(50), 
start_pos int NULL, 
width int NULL, 
unique_id_yn char(1) NULL,  
data_format varchar(20) NULL,
description varchar(1000) NULL, 
comments varchar(1000) NULL, 
rownum int NULL,
bigmatch_type char(6) NULL, 
matchfield_yn char(1) NULL, 
in_match_result char(1) NULL,
load_from_function char(1) NULL, 
function_to_load_from varchar(50) NULL,
datadict_id int(8),  
field_reference varchar(20) NULL,
date_created DATE NULL,
creator VARCHAR(20) NULL,
last_updated DATE NULL,
update_user VARCHAR(20) NULL,
exclude bit NULL,
delete_row bit NULL,
rowsource VARCHAR(12) NULL,
hubid CHAR(10) NULL,
orgid CHAR(10) NULL,
projid CHAR(10) NULL,
id BIGINT NOT NULL AUTO_INCREMENT, PRIMARY KEY id(id)
);

LOAD DATA LOCAL INFILE "C:/Greg/ChapinHall/CPS/datadicts/datadict_hsgradefiles_documentation2_gscopy.csv" 
 INTO TABLE datadict_row 
 FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' LINES TERMINATED BY "\r\n" IGNORE 1 LINES; 

/*
INSERT INTO datadict_row (
column_name, start_pos, width, unique_id_yn, data_format, description, comments,rownum, 
bigmatch_type, matchfield_yn, in_match_result, load_from_function, function_to_load_from,
datadict_id, date_created, creator, last_updated, update_user, exclude, delete_row, rowsource, hubid, orgid, projid
)
VALUES ('sid',0,8, '', 'int', 'Student ID', '', 1, '', '', '', '', '', 1, '2014-07-07', 'gsanders', '2014-07-07', 'gsanders', 0, 0, '', 'chapin', 'chapinhall', ''
);
*/

UPDATE datadict_row SET datadict_id=1 WHERE datadict_id='' OR datadict_id IS NULL;
UPDATE datadict_row SET date_created='2014-07-07' WHERE date_created ='' OR date_created IS NULL;
UPDATE datadict_row SET creator='gsanders' WHERE creator='' OR creator IS NULL;
UPDATE datadict_row SET last_updated='2014-07-07' WHERE last_updated = '' OR last_updated IS NULL;
UPDATE datadict_row SET update_user='gsanders' WHERE update_user = '' OR update_user IS NULL;
UPDATE datadict_row SET exclude=0 ;
UPDATE datadict_row SET delete_row=0 ;
UPDATE datadict_row SET rowsource='' ; 
UPDATE datadict_row SET hubid='chapin' ;
UPDATE datadict_row SET orgid='chapinhall' ;
UPDATE datadict_row SET projid='';

SELECT * FROM datadict_row ORDER BY datadict_id, id;
