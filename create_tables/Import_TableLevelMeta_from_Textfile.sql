USE metadash;
DELETE FROM dash_table;

LOAD DATA LOCAL INFILE "C:/Greg/Data/Metadash/CPM_Tables.txt" INTO TABLE dash_table LINES TERMINATED BY "\r\n"; 

/* DELETE FROM dash_table WHERE DESCRIP LIKE '%CDGA%';  */
LOAD DATA LOCAL INFILE "C:/Greg/Data/Metadash/CDGA_Tables.txt" INTO TABLE dash_table LINES TERMINATED BY "\r\n"; 

LOAD DATA LOCAL INFILE "C:/Greg/Data/Metadash/PMNTDA_Tables.txt" INTO TABLE dash_table LINES TERMINATED BY "\r\n"; 

SELECT * FROM dash_table ORDER BY DB, ID;
