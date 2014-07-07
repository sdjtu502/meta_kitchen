USE metadash;

DROP TABLE IF EXISTS data_set_x_request;

CREATE TABLE data_set_x_request (request_id int(8) NOT NULL, dataset_id int(8) NOT NULL, id BIGINT AUTO_INCREMENT NOT NULL, PRIMARY KEY (id) );

