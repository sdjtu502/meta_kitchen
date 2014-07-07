USE metadash;

DROP TABLE IF EXISTS user_x_dataset;

CREATE TABLE user_x_dataset (
uid varchar(10) NULL,
user_org varchar(10) NULL,
data_set int(6) NULL,
data_set_abbrev varchar(20),
permissions varchar(10) NULL
);

INSERT INTO user_x_dataset (uid, user_org, data_set, data_set_abbrev, permissions) 
 VALUES('gsanders', 'chapinhall', 110, 'IL_DHS_CCTS', 're');
INSERT INTO user_x_dataset (uid, user_org, data_set, data_set_abbrev, permissions) 
 VALUES('gsanders', 'chapinhall', 86, 'CPS_MASTER', 'crude');


INSERT INTO user_x_dataset (uid, user_org, data_set, data_set_abbrev, permissions) 
 VALUES('imorey', 'chapinhall', 110, 'IL_DHS_CCTS', 'r');
INSERT INTO user_x_dataset (uid, user_org, data_set, data_set_abbrev, permissions) 
 VALUES('imorey', 'chapinhall', 86, 'CPS_MASTER', 'r');

SELECT * FROM user_x_dataset ORDER BY user_org, uid, data_set_abbrev;
