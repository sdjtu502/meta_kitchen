USE metadash;

DROP TABLE IF EXISTS dataset_alias;

CREATE TABLE dataset_alias (provider_abbrev VARCHAR(12) NULL, provider VARCHAR(100) NULL, dataset_abbrev VARCHAR(20) NULL, data_set VARCHAR(100) NULL, data_set_alias VARCHAR(100) NULL, rowsource VARCHAR(16) NULL);

/* Import the CSV file */
LOAD DATA INFILE 'C:/Greg/ChapinHall/MetadataTracking/CH_dataset_with_Aliases.csv' 
INTO TABLE dataset_alias
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"'
IGNORE 1 LINES 
; 

SELECT * FROM dataset_alias ORDER BY provider_abbrev, data_set, data_set_alias, rowsource;
