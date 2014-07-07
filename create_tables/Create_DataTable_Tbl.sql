USE metadash;

DROP TABLE IF EXISTS data_table;
CREATE TABLE data_table (
    `table_name` varchar(40) NULL,
    `table_descrip` varchar(600) NULL,
    `host_server` varchar(20) NULL,
    `database` int(10) NULL,
    `data_set_abbrev` VARCHAR(20) NULL,
    `data_set` int(10) NULL,
	`file_type_or_platform` VARCHAR(10) NULL,
    `etl_only` BIT NULL,
    `etl_stage` varchar(10) NULL,
    `contains_pii` BIT NULL,
    `access_requires_column_permissions` BIT NULL,
    `public_data` BIT NULL,
    `public_metadata` BIT NULL,
    `comments` varchar(1000) NULL,
    `date_created` DATE NULL,
    `creator` VARCHAR(20) NULL,
    `last_updated` DATE NULL,
    `update_user` VARCHAR(20) NULL,
    `exclude` bit NULL,
    `delete_row` bit NULL,
    `rowsource` VARCHAR(12) NULL,
    `hubid` CHAR(10) NULL,
    `orgid` CHAR(10) NULL,
    `projid` CHAR(10) NULL,
    `id` int(4) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY id (id)
);



INSERT INTO data_table
(`table_name`, `table_descrip`, `host_server`,`database`, `data_set_abbrev`, `data_set`, `file_type_or_platform`, `etl_only`, `etl_stage`, `contains_pii`, `access_requires_column_permissions`,`public_data`,`public_metadata`,
`comments`, `date_created`, `creator`,  `last_updated`, `update_user`, `exclude`, `delete_row`, `rowsource`, `hubid`, `orgid`,`projid`) 
VALUES('members_2010_2013', 'CCTS Members from 2010 thru 2013, de-duplicated and stored in a single MySql database', 'linkage_server', 0, 'IL_DHS_CCTS', 0, 'mysql', 0, null, 1, 1, 0, 0,
'Members_2010_2013 includes a column called tempid that is a non-identifiable identifier that is uniqe when combined with case_id.', '2014-06-19', 'gsanders',  '2014-06-19', 'gsanders', 0, 0, '', 'chapinhall', 'chapinhall','');

SELECT * FROM metadash.data_table;
