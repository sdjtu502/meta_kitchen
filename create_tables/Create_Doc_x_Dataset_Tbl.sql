USE metadash;

DROP TABLE IF EXISTS data_set_document;

CREATE TABLE data_set_document (dataset_id int(8) NOT NULL, phase char(8), descrip varchar(1000) NULL, url varchar(1000) NULL, author varchar(100) NULL, creator varchar(20) NULL, last_updated datetime NULL, update_user varchar(20) NULL, id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id) );

