USE metadash;

DELETE FROM data_receipt WHERE rowsource='enclave';

INSERT INTO data_receipt (
data_received,
data_set_abbrev,outbound_data_request
data_set,
data_source_abbrev,
data_source,
reason, 
file_format, 
file_format_other, 
person_sending, 
person_receiving, 
export_date, 
receipt_date, 
saved_to_loc, 
detail_url,
comments, 
date_created,
creator,
last_updated,
update_user,
exclude,
delete_row,
rowsource,
hubid,
orgid,
projid
)
SELECT 
descrip AS data_received,
'' AS data_set_abbrev,
0 AS data_set,
'' AS data_source_abbrev,
0 AS data_source,
'' AS reason, 
'' AS file_format, 
'' AS file_format_other, 
'' AS person_sending, 
'' AS person_receiving, 
date AS export_date, 
date AS receipt_date, 
'' AS saved_to_loc, 
url AS detail_url,
'' AS comments, 
'2014-06-05' AS date_created,
'gsanders' AS creator,
'2014-06-05' AS last_updated,
'gsanders' AS update_user,
0 AS exclude,
0 AS delete_row,
rowsource,
'chapin' AS hubid,
'chapin' AS orgid,
'' AS projid
FROM data_receipt_enclave_import_temp 
;

SELECT * FROM data_receipt;
