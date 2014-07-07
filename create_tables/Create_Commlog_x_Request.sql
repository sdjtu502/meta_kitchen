USE metadash;

DROP TABLE IF EXISTS data_request_communication;

CREATE TABLE data_request_communication (request_id int(8) NOT NULL, descrip varchar(3000) NULL, participants varchar(300) NULL, actionitems varchar(3000), creator varchar(20) NULL, last_updated datetime NULL, update_user varchar(20) NULL, id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id) );

