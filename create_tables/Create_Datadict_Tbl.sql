USE metadash;

DROP TABLE IF EXISTS datadict;

CREATE TABLE datadict 
(datadict_name varchar(50) NULL, 
time_period VARCHAR(20) NULL,
etl_stage VARCHAR(100) NULL,
dict_file_name VARCHAR(100) NULL, 
dict_file_location VARCHAR(300) NULL, 
dict_file_type VARCHAR(20) NULL, 
data_file_name VARCHAR(100) NULL, 
data_file_location VARCHAR(300) NULL, 
data_file_type VARCHAR(20) NULL, 
datadict_types varchar(50) NULL, 
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
id BIGINT NOT NULL AUTO_INCREMENT, PRIMARY KEY id(id)
);

INSERT INTO datadict (
datadict_name, time_period, etl_stage, dict_file_name, dict_file_location, dict_file_type, data_file_name, data_file_location, data_file_type, 
datadict_types, comments, date_created, creator, last_updated, update_user, 
exclude, delete_row, rowsource, hubid, orgid, projid
) 
VALUES (
'CPS high school grade files, 2013', '2013', 'ready', 'hsgradefiles_documentation2.xlsx', '', 'xlsx', '', '', 'fixed width',
'', 'Shannon Gultinan assembled this dictionary from CPS grade files', '2014-07-07', 'gsanders',  '2014-07-07', 'gsanders', 0, 0, '', 'chapin', 'chapinhall', ''
);


SELECT * FROM datadict ORDER BY datadict_name;
