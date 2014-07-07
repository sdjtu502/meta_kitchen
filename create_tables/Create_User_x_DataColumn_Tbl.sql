USE metadash;

DROP TABLE IF EXISTS user_x_datacolumn;

CREATE TABLE user_x_datacolumn (
uid varchar(10) NULL,
user_org varchar(10) NULL,
data_set int(6) NULL,
data_set_abbrev varchar(20),
table_name varchar(40) NULL,
column_name varchar(40) NULL,
permissions varchar(10) NULL
);

INSERT INTO user_x_datacolumn (uid, user_org, data_set, data_set_abbrev, table_name, column_name, permissions) 
 VALUES('gsanders', 'chapinhall', 110, 'IL_DHS_CCTS', 'ccts_payments_2011', 'recip_ssn', 're');
INSERT INTO user_x_datacolumn (uid, user_org, data_set, data_set_abbrev, table_name, column_name, permissions) 
 VALUES('gsanders', 'chapinhall', 86, 'CPS_MASTER', 'cps_master_2012','lname', 'cru');


INSERT INTO user_x_datacolumn (uid, user_org, data_set, data_set_abbrev, table_name, column_name, permissions) 
 VALUES('imorey', 'chapinhall', 110, 'IL_DHS_CCTS', 'ccts_payments_2011', 'recip_ssn', 'r');
INSERT INTO user_x_datacolumn (uid, user_org, data_set, data_set_abbrev, table_name, column_name, permissions) 
 VALUES('imorey', 'chapinhall', 86, 'CPS_MASTER', 'cps_master_2012','lname', 'r');

SELECT * FROM user_x_datacolumn ORDER BY user_org, uid, data_set_abbrev, table_name, column_name;