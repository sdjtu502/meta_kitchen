USE metadash;

DROP TABLE IF EXISTS datadict;

CREATE TABLE datadict 
(datadict_name varchar(50) NULL, 
datadict_types varchar(50) NULL, 
file_location varchar(200) NULL, 
file_type varchar(20) NULL,
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
datadict_name, datadict_types, file_location, file_type,
comments, date_created, creator, last_updated, update_user, 
exclude, delete_row, rowsource, hubid, orgid, projid
) 
VALUES (
'CPS high school grade files', '', '', 'csv', 'Shannon Gultinan assembled this dictionary from CPS grade files', '2014-07-07', 'gsanders',  '2014-07-07', 'gsanders', 0, 0, '', 'chapin', 'chapinhall', ''
);


SELECT * FROM datadict ORDER BY datadict_name;
