USE metadash;
DELETE FROM dash_column;

LOAD DATA LOCAL INFILE "C:/Greg/Data/Metadash/CPM_BU50T1_VENDORS_Columns.txt" INTO TABLE dash_column LINES TERMINATED BY "\r\n"; 


SELECT * FROM dash_column ORDER BY DB, DataTable, ID;
