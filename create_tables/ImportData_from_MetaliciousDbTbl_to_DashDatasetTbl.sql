USE Metadash;


DELETE FROM dash_dataset WHERE import_flag = 'mtlcdb';

INSERT INTO dash_dataset 
(dataset_name,data_source,database_name,access_restricted,public,metadata_public,data_public,description,terms_of_use,software_platform,other_platform,overall_quality,overall_accuracy,overall_completeness,matchability,
owner,contact_name,contact_email,contact_phone,contact_fax,contact_address,contact_address2,contact_address3, contact_city,contact_state,contact_zip,
most_recent_update,data_periodicity,views,comments,
creator,update_user,date_created,last_updated,business_owner,contact_information,exclude,delete_row,import_flag,hubid,id) 
	SELECT database_name as dataset_name,'' as data_source,database_name,0 as access_restricted,1 as public,1 as metadata_public,1 as data_public,description,'' as terms_of_use,software_platform,'' as other_platform,'' as overall_quality,'' as overall_accuracy,'' as overall_completeness,'' as matchability,
    business_owner as owner,
	IF(LOCATE('Contact:', contact_information)>0,  TRIM( RIGHT(contact_information, LENGTH(TRIM(contact_information)) - LOCATE('Contact: ', TRIM(contact_information)) -7 ) ), '') as contact_name,
	'' as contact_email,'' as contact_phone,'' as contact_fax,'' as contact_address,'' as contact_address2,'' as contact_address3, '' as contact_city,'' as contact_state,'' as contact_zip,
    NULL as most_recent_update,data_period,views,comments,
    creator,'' as update_user,date_created,last_updated,business_owner,contact_information,0 as exclude,0 as delete_row,'mtlcdb' as import_flag,'chicago' as hubid,
    database_id As id
	FROM `datadictionary.cityofchicago.org`.databases;


/*  SELECT * FROM dash_dataset ORDER BY import_flag, ID; */

/*************************************************/
UPDATE dash_dataset SET contact_information = REPLACE(contact_information, 'Illinois', 'IL');

/*************************************************/
/*Address */
UPDATE dash_dataset SET contact_address = LEFT(LEFT(TRIM(contact_information), LOCATE('chicago,', TRIM(LOWER(contact_information)))-1 ), 40)  WHERE LOCATE('chicago,', LOWER(contact_information))>0;
UPDATE dash_dataset SET contact_city = 'Chicago', contact_state='IL' WHERE LOCATE('chicago,', LOWER(contact_information))>0;

/*************************************************/
 
/*PHONE */
UPDATE dash_dataset SET contact_phone = LEFT( RIGHT(contact_name, LENGTH(TRIM(contact_name)) - LOCATE('-', TRIM(contact_name)) +4 ), 20)  WHERE contact_name REGEXP '-[0-9]' ;
/*Phone may be separated from name by space, tab, or CR */
UPDATE dash_dataset SET contact_phone = LEFT(contact_phone, LOCATE(' ', contact_phone)) WHERE LOCATE(' ', contact_phone)>0 ;
UPDATE dash_dataset SET contact_phone = LEFT(contact_phone, LOCATE(CHAR(9), contact_phone)) WHERE LOCATE(CHAR(9), contact_phone)>0 ;
UPDATE dash_dataset SET contact_phone = LEFT(contact_phone, LOCATE(CHAR(10), contact_phone)) WHERE LOCATE(CHAR(10), contact_phone)>0 ;
UPDATE dash_dataset SET contact_phone = LEFT(contact_phone, LOCATE(CHAR(13), contact_phone)) WHERE LOCATE(CHAR(13), contact_phone)>0 ;

/*************************************************/
/*EMAIL */
UPDATE dash_dataset SET contact_email = TRIM( RIGHT(contact_name, LENGTH(TRIM(contact_name)) - LOCATE('@', TRIM(contact_name)) +24 ))  WHERE contact_name LIKE '%@%' ;
/*Email may be separated from name by space, tab, or CR */
UPDATE dash_dataset SET contact_email = RIGHT(contact_email, LENGTH(contact_email) - LOCATE(CHAR(32), contact_email)) WHERE LOCATE(CHAR(32), contact_email)>0;
UPDATE dash_dataset SET contact_email = RIGHT(contact_email, LENGTH(contact_email) - LOCATE(CHAR(9), contact_email)) WHERE LOCATE(CHAR(9), contact_email)>0;
UPDATE dash_dataset SET contact_email = RIGHT(contact_email, LENGTH(contact_email) - LOCATE(CHAR(10), contact_email)) WHERE LOCATE(CHAR(10), contact_email)>0;
UPDATE dash_dataset SET contact_email = RIGHT(contact_email, LENGTH(contact_email) - LOCATE(CHAR(13), contact_email)) WHERE LOCATE(CHAR(13), contact_email)>0;


/*************************************************/
/*ZIP */
UPDATE dash_dataset SET contact_zip = TRIM( LEFT( RIGHT(contact_information, LENGTH(TRIM(contact_information)) - LOCATE(' il', TRIM(LOWER(contact_information)))-2 ), 11))  WHERE LOWER(contact_information) LIKE '% il%' ;
/*Zip may be separated from phone by space, tab, or CR */
UPDATE dash_dataset SET contact_zip = LEFT(contact_zip, LOCATE(' ', contact_zip)) WHERE LOCATE(' ', contact_zip)>0 ;
UPDATE dash_dataset SET contact_zip = LEFT(contact_zip, LOCATE(CHAR(9), contact_zip)) WHERE LOCATE(CHAR(9), contact_zip)>0 ;
UPDATE dash_dataset SET contact_zip = LEFT(contact_zip, LOCATE(CHAR(10), contact_zip)) WHERE LOCATE(CHAR(10), contact_zip)>0 ;
UPDATE dash_dataset SET contact_zip = LEFT(contact_zip, LOCATE(CHAR(13), contact_zip)) WHERE LOCATE(CHAR(13), contact_zip)>0 ;
/*************************************************/
/*Contact name */
UPDATE dash_dataset SET contact_name = LEFT(contact_name, LOCATE('3', contact_name)-1) WHERE contact_name LIKE '%3%';

/************************************************/
SELECT dataset_name, contact_name, contact_phone, contact_email, contact_address, contact_city, contact_zip, contact_information 
 FROM dash_dataset;

/*After creating the dash_dataset table, run ImportData_from_MetaliciousDbTbl_to_DashDatasetTbl.sql */
