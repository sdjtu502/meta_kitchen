USE metadash;
CREATE TABLE IF NOT EXISTS metadash.dash_dataset 
 (ds_name varchar(80) NULL, 
 datasource char(16) NULL, 
 restricted bit NULL, 
 descrip varchar(120) NULL, 
 terms_of_use varchar(120) NULL,
 hubid CHAR(10),
 date_created DATETIME NULL, 
 creator VARCHAR (20) NULL, 
 last_updated DATETIME NULL, 
 update_user VARCHAR (20) NULL, 
 exclude BIT NULL, 
 delete_row BIT NULL, 
 comments VARCHAR(1000) NULL, 
 id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id)
) ;