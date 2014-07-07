USE metadash;

DROP TABLE IF EXISTS dash_table;
CREATE TABLE IF NOT EXISTS dash_table (
 name VARCHAR (30), 
 descrip VARCHAR (400) NULL, 
 db VARCHAR(14) NULL, 
 hubid CHAR(10),
 date_created DATETIME NULL, creator VARCHAR (20) NULL, last_updated DATETIME NULL, update_user VARCHAR (20) NULL, exclude BIT NULL, delete_row BIT NULL, 
 comments VARCHAR(1000) NULL, 
 id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id) 
);

ALTER TABLE dash_table ADD KEY (name);

SELECT * FROM dash_table ORDER BY db, id;
