USE metadash;

DROP TABLE IF EXISTS data_receipt;

CREATE TABLE data_receipt (
data_received VARCHAR(100) NULL,
data_set_abbrev VARCHAR(20) NULL,
data_set INT(6) NULL,
data_source_abbrev VARCHAR(20) NULL,
data_source INT(6) NULL,
reason char(10) NULL, 
file_format char(10) NULL, 
file_format_other varchar(80) NULL, 
person_sending varchar(40) NULL, 
person_receiving varchar(40) NULL, 
export_date varchar(20) NULL, 
receipt_date date NULL, 
saved_to_loc varchar(200) NULL, 
detail_url varchar(200) NULL,
comments varchar(1000) NULL, 
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
id int(10) NOT NULL auto_increment, primary key id (id) );

/*
INSERT INTO data_receipt (data_source, data_set, db, reason, file_format, person_sending, org_sending, person_receiving, saved_to_loc, export_date, rcv_date)  
VALUES("DCFS", "DCFS IL Outcomes", "", "ROUTINE", "", "", "DCFS", "AJOHNSON", "", "2014-04-30", "2014-05-01");

INSERT INTO data_receipt (data_source, data_set, db, reason, file_format, person_sending, org_sending, person_receiving, saved_to_loc, export_date, rcv_date)  
VALUES("DCFS", "DCFS CANTS", "", "ROUTINE", "", "", "DCFS", "AJOHNSON", "", "2014-02-15", "2014-05-01");
*/

SELECT * FROM data_receipt;
