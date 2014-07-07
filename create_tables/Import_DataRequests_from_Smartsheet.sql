USE metadash;

UPDATE data_request_smartsheet_import_temp SET request_date=null WHERE request_date='';
UPDATE data_request_smartsheet_import_temp SET receipt_date=null WHERE receipt_date='';
UPDATE data_request_smartsheet_import_temp SET last_follow_up=null WHERE last_follow_up='';
UPDATE data_request_smartsheet_import_temp SET re_request_date=null WHERE re_request_date='';

UPDATE data_request_smartsheet_import_temp SET requester='Kenneth Soyemi' WHERE agency LIKE '%Kenneth Soyemi%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Kenneth Soyemi)', '') WHERE agency LIKE '%Kenneth Soyemi%';
UPDATE data_request_smartsheet_import_temp SET requester='Roopa Seshadri' WHERE agency LIKE '%Roopa Seshadri%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Roopa Seshadri)', '') WHERE agency LIKE '%Roopa Seshadri%';
UPDATE data_request_smartsheet_import_temp SET requester='Frida Fokumi' WHERE agency LIKE '%Frida Fokum%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Frida Fokum)', '') WHERE agency LIKE '%Frida Fokum%';
UPDATE data_request_smartsheet_import_temp SET requester='John Tharp' WHERE agency LIKE '%John Tharp%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(John Tharp)', '') WHERE agency LIKE '%John Tharp%';
UPDATE data_request_smartsheet_import_temp SET requester='Cheryl Ward' WHERE agency LIKE '%Cheryl Ward%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Cheryl Ward)', '') WHERE agency LIKE '%Cheryl Ward%';
UPDATE data_request_smartsheet_import_temp SET requester='Mark Flotow, John Tharp' WHERE agency LIKE '%Mark Flotow, John Tharp%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Mark Flotow, John Tharp)', '') WHERE agency LIKE '%Mark Flotow, John Tharp%';
UPDATE data_request_smartsheet_import_temp SET requester='Megan Toth' WHERE agency LIKE '%Megan Toth%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Megan Toth)', '') WHERE agency LIKE '%Megan Toth%';
UPDATE data_request_smartsheet_import_temp SET requester='Tonia Singletary' WHERE agency LIKE '%Tonia Singletary%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Tonia Singletary)', '') WHERE agency LIKE '%Tonia Singletary%';
UPDATE data_request_smartsheet_import_temp SET requester='Kenneth Soyemi' WHERE agency LIKE '%Kenneth Soyemi%';
UPDATE data_request_smartsheet_import_temp SET agency=REPLACE(agency, '(Kenneth Soyemi)', '') WHERE agency LIKE '%Kenneth Soyemi%';


DELETE FROM outbound_data_request WHERE rowsource='smartsheet';

INSERT INTO outbound_data_request 
(provider_org, category,subcategory, data_requested, status, request_date, receipt_date, last_follow_up, verification_notes, re_request_date, requester, rowsource) 
SELECT 
group_name AS provider_org, 
category,
subcategory,
agency AS data_requested, 
data_status AS status, 
request_date, 
receipt_date, 
last_follow_up, 
verification_1 AS verification_notes, 
re_request_date,  
requester,
rowsource 
FROM data_request_smartsheet_import_temp 
ORDER BY rownum ;

SELECT * FROM data_request_smartsheet_import_temp;
