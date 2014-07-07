USE metadash;

DROP TABLE IF EXISTS activity;
CREATE TABLE activity (metatype char(10) NULL, meta_id char(10) NULL, 
activity_type char(10) NULL, other_type varchar(40) NULL, activity_date datetime NULL, activity_who datetime NULL, descrip varchar(600) NULL, 
hubid char(10) NULL, orgid char(10) NULL, projid char(10) NULL, creator char(10) NULL, date_created datetime NULL, 
id int(4) NOT NULL AUTO_INCREMENT, PRIMARY KEY id(id));
