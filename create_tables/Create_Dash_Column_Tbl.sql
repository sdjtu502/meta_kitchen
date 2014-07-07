USE metadash;

DROP TABLE IF EXISTS dash_column;
CREATE TABLE IF NOT EXISTS dash_column (
 name VARCHAR (30), 
 descrip VARCHAR (400) NULL, 
 datatype CHAR(14) NULL,
 column_width int NULL,
 code VARCHAR(20) NULL,
 db VARCHAR(14) NULL, 
 dataset VARCHAR(10) NULL,
 datatable VARCHAR(100) NULL,
 hubid CHAR(10),
 date_created DATETIME NULL, 
 creator VARCHAR (20) NULL, 
 last_updated DATETIME NULL, 
 update_user VARCHAR (20) NULL, 
 exclude BIT NULL, 
 delete_row BIT NULL, 
 comments VARCHAR(1000) NULL, 
 id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id) 
);

ALTER TABLE dash_column ADD KEY (name);

SELECT * FROM dash_column ORDER BY db, datatable, id;

LOAD DATA LOCAL INFILE "C:/Greg/Code/Metalicious_Sysobjects/Metalicious_objects_detail.csv" INTO TABLE dash_column LINES TERMINATED BY "\r\n"; 