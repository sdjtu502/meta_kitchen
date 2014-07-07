USE metadash;

/* DATABASE */
/*
ALTER TABLE dash_database ADD FOREIGN KEY(owner) REFERENCES dash_owner(abbrev);
ALTER TABLE dash_table ADD FOREIGN KEY(db) REFERENCES dash_database(abbrev);
*/

/* DATASET */
ALTER TABLE data_set_document ADD FOREIGN KEY(dataset_id) REFERENCES data_set(id) ;

ALTER TABLE data_set_communication ADD FOREIGN KEY(dataset_id) REFERENCES data_set (id);

ALTER TABLE data_set_x_request ADD FOREIGN KEY(dataset_id) REFERENCES data_set (id);



/* OUTBOUND DATA REQUEST */
ALTER TABLE data_request_document ADD FOREIGN KEY(request_id) REFERENCES outbound_data_request(id) ;

ALTER TABLE data_request_communication ADD FOREIGN KEY(request_id) REFERENCES outbound_data_request (id);

ALTER TABLE data_set_x_request ADD FOREIGN KEY(request_id) REFERENCES outbound_data_request (id);


