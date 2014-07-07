USE metadash;

DROP TABLE IF EXISTS file_format;
CREATE TABLE file_format (file_ext varchar(16) NULL, format varchar(30) NULL, abbrev char(6) NULL,
id int(4) NOT NULL AUTO_INCREMENT, PRIMARY KEY id(id) );


INSERT INTO file_format (format, file_ext) VALUES("Fixed-width text", ".txt, .dat");
INSERT INTO file_format (format, file_ext) VALUES("Comma-delimited", ".csv");
INSERT INTO file_format (format, file_ext) VALUES("Delimited text", ".txt");
INSERT INTO file_format (format, file_ext) VALUES("Excel", ".xls, .xlsx");
INSERT INTO file_format (format, file_ext) VALUES("Access", ".mdb");
INSERT INTO file_format (format, file_ext) VALUES("Dbase", ".dbf");
INSERT INTO file_format (format, file_ext) VALUES("SAS", ".sas7bdat");
INSERT INTO file_format (format, file_ext) VALUES("Mainframe (ebsdc)", "");
INSERT INTO file_format (format, file_ext) VALUES("MySql dump", ".sql");
INSERT INTO file_format (format, file_ext) VALUES("Other (describe)", "");

SELECT * FROM file_format;
