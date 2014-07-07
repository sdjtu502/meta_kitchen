USE metadash;

/* Populate the DataSet table from lists of data sets requested and received by Chapin Hall */
DELETE FROM data_set WHERE  rowsource = 'smart-enclv';

INSERT INTO data_set 
(data_source_abbrev, data_source_name, data_set_abbrev, data_set_name, rowsource, creator, update_user, date_created, last_updated, exclude, delete_row, hubid, orgid, projid ) 
SELECT DISTINCT 
provider_abbrev AS data_source_abbrev, 
provider AS data_source_name, 
dataset_abbrev AS data_set_abbrev, 
data_set AS data_set_name, 
'smart-enclv' AS rowsource,
'gsanders' AS creator,
'gsanders' AS update_user,
'2014-06-05' AS date_created,
'2014-06-05' AS last_updated,
0 AS exclude,
0 AS delete_row,
'chapin' AS hubid,
'chapin' AS orgid,
'' AS projid
FROM dataset_alias 
WHERE provider_abbrev !=''
ORDER BY provider_abbrev, data_set, rowsource
;

SELECT * FROM data_set;
