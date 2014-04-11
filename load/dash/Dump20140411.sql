CREATE DATABASE  IF NOT EXISTS `metadash` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `metadash`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: metadash
-- ------------------------------------------------------
-- Server version	5.6.14-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dash_column`
--

DROP TABLE IF EXISTS `dash_column`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dash_column` (
  `name` varchar(30) DEFAULT NULL,
  `descrip` varchar(400) DEFAULT NULL,
  `datatype` char(14) DEFAULT NULL,
  `column_width` int(11) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `db` varchar(14) DEFAULT NULL,
  `dataset` varchar(10) DEFAULT NULL,
  `datatable` varchar(100) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dash_column`
--

LOCK TABLES `dash_column` WRITE;
/*!40000 ALTER TABLE `dash_column` DISABLE KEYS */;
INSERT INTO `dash_column` VALUES ('CREATED_BY',' Created by Userid',' VARCHAR2',250,' user','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),('DATE_CREATED',' Creation date',' DATE',7,' sysdate','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2),('DATE_MODIFIED',' Last update date',' DATE',7,'','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3),('DOPS_TEAM_CODE',' compound foreign key to get procurement team desc on bu50t1_codes',' VARCHAR2',12,'','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,4),('DOPS_TEAM_CODE_TYPE',' compound foreign key to bu50t1_codes',' NUMBER',22,' 104','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5),('MODIFIED_BY',' Last updated by',' VARCHAR2',250,'','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,6),('VENDOR_NAME','',' VARCHAR2',240,'','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,7),('VEND_SEQ',' Primary key',' NUMBER',22,'','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,8);
/*!40000 ALTER TABLE `dash_column` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dash_database`
--

DROP TABLE IF EXISTS `dash_database`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dash_database` (
  `name` varchar(100) DEFAULT NULL,
  `descrip` varchar(400) DEFAULT NULL,
  `owner` char(10) DEFAULT NULL,
  `contact_name` varchar(40) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_phone1` varchar(20) DEFAULT NULL,
  `contact_fax` varchar(20) DEFAULT NULL,
  `contact_address1` varchar(40) DEFAULT NULL,
  `contact_address2` varchar(40) DEFAULT NULL,
  `contact_address3` varchar(40) DEFAULT NULL,
  `contact_city` varchar(30) DEFAULT NULL,
  `contact_state` char(2) DEFAULT NULL,
  `contact_zip` char(10) DEFAULT NULL,
  `timeperiod` varchar(30) DEFAULT NULL,
  `last_data_update` datetime DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `quality` varchar(400) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `datasource` char(10) DEFAULT NULL,
  `steward` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `abbrev` char(10) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abbrev` (`abbrev`),
  KEY `owner` (`owner`),
  CONSTRAINT `dash_database_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `dash_owner` (`abbrev`),
  CONSTRAINT `dash_database_ibfk_2` FOREIGN KEY (`owner`) REFERENCES `dash_owner` (`abbrev`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dash_database`
--

LOCK TABLES `dash_database` WRITE;
/*!40000 ALTER TABLE `dash_database` DISABLE KEYS */;
INSERT INTO `dash_database` VALUES ('Program Monitoring Tracking Application','This system collects information regarding the findings from monitoring agency programs. It tracks visit dates, programs, program status and findings.','CHDFSS','Matt Smith','matt.smith@cityofchicago.org','312-743-2031','','1615 West Chicago Avenue','5th floor','','Chicago','IL','60622-5127','April 2009-present','2013-04-11 14:40:00','Caspio, Access','Data is added and updated daily.','The Program Monitoring Tracking Data Application was created as a web-based application using Caspio.','','',NULL,NULL,NULL,NULL,'\0',NULL,'PMNTDA','chapin',1),('Community Development Grant Application (CDGA)','The CDGA database contains information submitted by delegate agencies that have applied for funding using grant dollars available in the budget.','OBM','Kelley Quinn','Kelley.Quinn@cityofchicago.org','312-744-7790','','121 North LaSalle Street','Room 604','','Chicago','IL','60602','September 2003-present','2013-09-27 15:36:04','Oracle','CDGA is a custom-built database application. Data is updated yearly during the application period. Some historical data is modified when the opportunity arises.','CDGA is linked to the Chicago Budget System (CBS) for budget purposes.','','',NULL,NULL,NULL,NULL,NULL,NULL,'CDGA','chapin',2),('Capital Project Management (CPM)','The CPM database contains the budget dollars allocated towards capital projects occurring in the city over the past 15 years.','OBM','Kelley Quinn','Kelley.Quinn@cityofchicago.org','312-744-7790','','121 North LaSalle Street','Room 604','','Chicago','IL','60602','September 2003-present','2013-09-27 15:40:56','Oracle','CPM is a custom-built database application. Most data that is updated is for the fiscal year. Some historical data is modified when the opportunity arises. Some data gaps occur in the CPM system due to departments not closing/completing a project using the standard system-designed process or system data was not fully available so a placeholder was entered for the data.','Expenditure data is received from the Citys FMPS accounting system for projects stored in CPM.','','',NULL,NULL,NULL,NULL,NULL,NULL,'CPM','chapin',3);
/*!40000 ALTER TABLE `dash_database` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dash_owner`
--

DROP TABLE IF EXISTS `dash_owner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dash_owner` (
  `name` varchar(100) DEFAULT NULL,
  `descrip` varchar(400) DEFAULT NULL,
  `abbrev` char(10) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abbrev` (`abbrev`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dash_owner`
--

LOCK TABLES `dash_owner` WRITE;
/*!40000 ALTER TABLE `dash_owner` DISABLE KEYS */;
INSERT INTO `dash_owner` VALUES ('Department of Health and Human Services','','CHHHS',NULL,NULL,NULL,NULL,NULL,NULL,'','chicago',1),('Office of Budget and Management','','CHOBM',NULL,NULL,NULL,NULL,NULL,NULL,'','chicago',2),('Department of Family and Support Services','','CHDFSS',NULL,NULL,NULL,NULL,NULL,NULL,'','chicago',3);
/*!40000 ALTER TABLE `dash_owner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dash_table`
--

DROP TABLE IF EXISTS `dash_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dash_table` (
  `name` varchar(30) DEFAULT NULL,
  `descrip` varchar(400) DEFAULT NULL,
  `db` varchar(14) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `db` (`db`),
  CONSTRAINT `dash_table_ibfk_1` FOREIGN KEY (`db`) REFERENCES `dash_database` (`abbrev`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dash_table`
--

LOCK TABLES `dash_table` WRITE;
/*!40000 ALTER TABLE `dash_table` DISABLE KEYS */;
INSERT INTO `dash_table` VALUES ('BU50T1_ADDRESSES',' X coordinate low-state plane coordinates','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),('BU50T1_ADDRESSES_TEMP',' Address information stored as part of batch geocoding.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,2),('BU50T1_ADDRESS_WORK_TYPES',' work types associated to the address table','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3),('BU50T1_ADDRESS_WORK_TYPE_JN',' Contains all the work type information for a CPM number.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,4),('BU50T1_ADDR_BATCH_DELETE',' stores addresses to be batch deleted','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,5),('BU50T1_BENCHMARKS',' legacy table from the CIP system which was replaced by CPM; no longer used in current CPM operations','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,6),('BU50T1_BUREAUS',' stores the list of all bureaus in CPM','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,7),('BU50T1_CDOT_CONTRACTS',' stores general CDOT contact information','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,8),('BU50T1_CDOT_CONTRACTS_TEMP',' Not currently used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,9),('BU50T1_CDOT_CONTRACT_BENCHMARK',' stores contract benchmark information contained in the legacy system CIP; which was replaced by CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,10),('BU50T1_CDOT_CONTRACT_COMMENTS',' Contains comments on the CDOT contract','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,11),('BU50T1_CDOT_CONTRACT_TASKS',' Contains task information associated with a CDOT contract','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,12),('BU50T1_CDOT_CONTRACT_WARDS',' Contains contract information that relates to a specific aldermanic ward','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,13),('BU50T1_CDOT_CON_DEPT_PROJECTS',' stores CDOT project number when different than the CPM number','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,14),('BU50T1_CDOT_CON_PROJ_MANAGERS',' stores the project manager of the contract','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,15),('BU50T1_CIP_MEASURE_TYPES',' measurement types of the legacy CIP system','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,16),('BU50T1_CIP_RESP_DN_WORK_TYPES',' Legacy CIP system table which contains the responsible LDAP distinguished name','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,17),('BU50T1_CIP_WORK_CATEGORIES',' Legacy CIP system work categories','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,18),('BU50T1_CIP_WORK_TYPES',' Legacy CIP system work types','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,19),('BU50T1_CODES',' Contains the options for the various system work types which allow the user to select valid options for the field in the system.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,20),('BU50T1_CODE_TYPES',' Contains all the fields that can be defined in the BU50T1_CODES table.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,21),('BU50T1_CPM_STATUS_MAPPING',' mapping of the CIP status to CPM status. no longer used since CIP has been retired.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,22),('BU50T1_CPR_ENOTE',' Table contains no data','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,23),('BU50T1_DEPARTMENTS',' stores the list of all departments in CPM','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,24),('BU50T1_DEPARTMENT_PROJECTS',' contains the link of the CPM number to the department specific non-CPM number.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,25),('BU50T1_DT_CONTRACTS',' stores contract information entered by the procurement department.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,26),('BU50T1_DT_CONTRACT_CYCLES',' stores contract cycle information.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,27),('BU50T1_DT_CYCLE_SETUPS',' stores information regarding the contract cycle steps.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,28),('BU50T1_DT_LOOKUPS',' contains lookup values that are used by the other BU50T1_DT\" tables.\"','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,29),('BU50T1_FACILITIES',' Contains all CPM facility information.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,30),('BU50T1_FAQ',' Table not used','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,31),('BU50T1_FAQ_CATEGORIES',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,32),('BU50T1_FAVORITE_PROJECTS',' Contains the list of recent projects for a CPM user','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,33),('BU50T1_FAVORITE_REPORTS',' Contains a list of Favorite reports for a CPM user.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,34),('BU50T1_FMPS_EXPENDITURES',' Contains expenditure information sent from the FMPS system.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,35),('BU50T1_FMPS_EXPENDITURE_DETAIL',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,36),('BU50T1_FMPS_FUNDING_STRIPS',' Contains funding strip information recieved from FMPS.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,37),('BU50T1_FMPS_FUNDING_STRIP_TEMP',' Table contains the funding stript information for the CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,38),('BU50T1_FUNDING_ACCTS',' Contains all the funding accounts as listed in the legacy CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,39),('BU50T1_FUNDING_PROCESS',' Contains the funding process as listed in the legacy CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,40),('BU50T1_FUNDING_SOURCE',' contains the funding source as listed in the legacy CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,41),('BU50T1_FUNDS',' Contains all fund codes in the CPM system.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,42),('BU50T1_FUND_TEMP',' Contains fund code as listed in the CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,43),('BU50T1_FUND_TEMP2',' Contains fund code as listed in the CIP system. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,44),('BU50T1_GEO_BOUNDARIES',' Contains the geography boundaries for geocoding.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,45),('BU50T1_GEO_RESULTS',' Contains the geocoding results for an address/location.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,46),('BU50T1_GEO_SHAPES',' Contains all valid geocode shapes/geographies that are available for CPM use.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,47),('BU50T1_MEASURE_TYPES',' Contains all units of measurement of work types contained in CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,48),('BU50T1_MENU_ADDR_WORK_TYPES_JN',' This table contains all the records (menu address_work_types) that we load into cpm from the menu spreadsheets that BOE and CDOT send to us. Note that the addresses_temp table only contains the data from the current spreadsheet.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,49),('BU50T1_MENU_PROJ_MAPPING',' Contains all the CPM project numbers for the aldermanic menu program.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,50),('BU50T1_PERSONNEL',' Contains the list of CIP users that should have had access to CPM for the initial go-live. This table is no longer used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,51),('BU50T1_PRJ_FND_STRPS_ORIG_LOAD',' Table contains no data.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,52),('BU50T1_PROGRAMS',' Table contains the Programs which assigned to projects.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,53),('BU50T1_PROJECTS',' Table contains the header information for all CPM projects.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,54),('BU50T1_PROJECT_FILE',' Contains the attachments data loaded a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,55),('BU50T1_PROJECT_FUNDS',' contains the current funding information for a project at the overall project level.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,56),('BU50T1_PROJECT_FUND_JN',' Contains all project fund changes.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,57),('BU50T1_PROJECT_MAJOR_TASKS',' Stores the project major tasks.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,58),('BU50T1_PROJECT_MAJOR_TASK_FILE',' Stores attachments for the projects major task.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,59),('BU50T1_PROJECT_MAJOR_TASK_REQ',' Stores the major task requisition.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,60),('BU50T1_PROJECT_NOTES',' Current overall notes for the CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,61),('BU50T1_PROJECT_NOTE_JN',' Contains all project notes contained in CPM','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,62),('BU50T1_PROJECT_NOTIFICATIONS',' Table not used','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,63),('BU50T1_PROJECT_PHASES',' Contains the current CPM project phases for a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,64),('BU50T1_PROJECT_PHASE_JN',' Contains all the CPM project phases for a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,65),('BU50T1_PROJECT_PHASE_LEGACY',' Contains the project phases from the CIP system which was replaced by CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,66),('BU50T1_PROJECT_PHASE_NOTES',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,67),('BU50T1_PROJECT_REQUISITIONS',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,68),('BU50T1_PROJECT_REQ_NOTES',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,69),('BU50T1_PROJECT_TASKS',' Contains the tasks assigned to a project address.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,70),('BU50T1_PROJECT_TASK_NOTES',' Contains the current task notes for a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,71),('BU50T1_PROJECT_TASK_NOTE_JN',' Contains all the task notes for a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,72),('BU50T1_PROJECT_YEAR_PUBLISHED',' Year a CPM project was published in the capital improvement program book.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,73),('BU50T1_PROJ_FUNDING_PROCESSES',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,74),('BU50T1_PROJ_FUNDING_SOURCES',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,75),('BU50T1_PROJ_FUNDING_STRIPS',' FMPS funding strips currently associated to a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,76),('BU50T1_PROJ_FUNDING_STRIPS_JN',' All FMPS funding strips associated to a CPM project.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,77),('BU50T1_PROJ_MAJ_TASK_WORK_TYPE',' Stores the project major task work types.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,78),('BU50T1_PROJ_PHASE_CONTRACTORS',' Used in the CIP system; not used on the CPM system.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,79),('BU50T1_REF_CODES',' General list of reference codes group by rv_domain','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,80),('BU50T1_REPORTS',' Contains all reports in the CPM system along with their user description.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,81),('BU50T1_REPORT_GROUP_CATEGORIES',' Stores CPM report category groupings.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,82),('BU50T1_REPORT_GROUP_CAT_DN',' Controls which report categories a user is able to view.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,83),('BU50T1_REPORT_PARMS',' CPM report parameters','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,84),('BU50T1_REPORT_PARM_LOOKUP',' CPM report parameters linking the user label to the SQL cursor used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,85),('BU50T1_RESP_DN',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,86),('BU50T1_RESP_DN_BENCHMARKS',' CIP benchmark data; not used in CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,87),('BU50T1_RESP_DN_FACILITIES',' Responsible department for a facility.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,88),('BU50T1_RESP_DN_FUNDING_PROCESS',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,89),('BU50T1_RESP_DN_FUNDS',' Controls which department can view/use a fund in CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,90),('BU50T1_RESP_DN_PROGRAMS',' Table not used.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,91),('BU50T1_RESP_DN_SUB_PROGRAMS',' Controls which departments can view/use a sub-program.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,92),('BU50T1_RESP_DN_WORK_TYPES',' Controls which work types can be seen/used by a department.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,93),('BU50T1_ROLES',' Table contains no data.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,94),('BU50T1_RPTS_RUN_JN',' Contains all reports run.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,95),('BU50T1_STREETS',' Contains a full list of all valid street available for geocoding purposes,','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,96),('BU50T1_SUB_PROGRAMS',' Contains all program/sub-program combinations.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,97),('BU50T1_USER_ACTIVITY',' Contains user activity from CIP.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,98),('BU50T1_VENDORS',' Contains all CIP vendors.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,99),('BU50T1_WORK_CATEGORIES',' Contains the CPM work categories.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,100),('BU50T1_WORK_TYPES',' Contains all the work types listed in CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,101),('BU50T1_WORK_TYPES_TEMP',' Used for the conversion of CIP projects to CPM projects.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,102),('BU50T1_WORK_TYPE_MAPPING',' Contains the mapping of CIP work types to CPM work types. Table no longer required since CIP was replaced by CPM.','CPM','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,103),('ADDRESS',' Delegate addresses','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,128),('APPLICATION',' CDGA applications','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,129),('APPROPRIATION',' Dept recommendation appropriation key','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,130),('APP_ROLE',' List of security roles','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,131),('APP_ROLE_URL',' Forms available to CDGA application based on their user role.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,132),('APP_URL',' application short cut links','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,133),('APP_USER',' Authorized users','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,134),('APP_USER_ACTIVATION',' List of new users who must reply to an OBM email in order to have userid activated. Once they have replied they will be removed from this table and be authorized users.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,135),('BUDGET_TYPE_CODE',' List of account groupings','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,136),('CBS_FUND',' List of City funds that provide CDGA money','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,137),('CORPORATE_STATUS',' List of delegate business type, Not for profit, for profit, etc.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,138),('DELEGATE',' List of delegates that have registered','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,139),('DEPARTMENT',' List of City departments managing CDGA programs','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,140),('DEPARTMENT_APP_USER',' Department users','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,141),('DHS_APPLICATION',' Applications for Homelessness programs managed by HUD','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,142),('DHS_BUILDING_CODES',' Homelessness program applicants information on building codes compliance','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,143),('DHS_BUILDING_SYSTEMS',' Homelessness program applicants information on facility details','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,144),('DHS_CONGREGATE_HOUSING',' For applicants that provide congregate apartments.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,145),('DHS_FACILITY',' Homelessness program applicants information about their facilities','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,146),('DHS_LEASE_INFORMATION',' Homelessness program. If applicant leases their facility, they most provide this information.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,147),('DHS_LICENSING',' Homelessness program applicants must provide info if their facility has a Food Handlers License or Retail Food Establishment License.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,148),('DHS_NEW_SITE_INFORMATION',' Homelessness program applicants facilities not currently operating at proposed location.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,149),('DHS_OWNERSHIP_INFORMATION',' Homelessness program. If applicant owns their facility, they most provide this information.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,150),('DHS_PROGRAM_INFORMATION',' Homelessness program applicants program details','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,151),('DHS_PROJECT_BASED_APTS',' For applicants that provide individual apartments.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,152),('DHS_SAFETY_SYSTEMS',' Homelessness program applicants information on safety and security','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,153),('DHS_SERVICE_LINKAGE',' Additional agencies that applicant refers clients to.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,154),('DHS_SOCIAL_SERVICES',' For applicants that applying for a non-residential program or social service program','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,155),('DIVISION',' List of City department divisions or bureaus managing CDGA programs','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,156),('EVALUATION',' Department evaluations of applications','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,157),('EVALUATION_FUNDING',' list of evaluation ratings','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,158),('FACILITY_TYPE',' List of common facility types for delegate agencies','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,159),('FAQ',' not implemented','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,160),('FAQ_CATEGORY',' not implemented','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,161),('FRINGE_BENEFIT',' List of fringe benefits that delegate agencies offer to their employees with calulators and determination of City share','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,162),('FRINGE_BENEFIT_TYPE_CODE',' List of fringe benefits such as social security, medicare, etc.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,163),('FUND',' Funding sources other than CDBG money that delegates agencies are using for an application','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,164),('INDEX_ADDRESS',' Internal address index used by the database','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,165),('INDEX_DELEGATE',' Internal delegate index used by the database','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,166),('INDEX_USER',' Internal user index used by the database','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,167),('NON_PERSONNEL_BUDGET',' Applicant\'s nonpersonnel budget for program they are applying for','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,168),('OFFICE_HOURS',' list of days and hours of operation for delegates','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,169),('PERSONNEL_BUDGET',' Applicant\'s personnel budget for program they are applying for','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,170),('PIAD',' PIAD stands for Problem, Intervention, Activities, Deliverables that applicant will address','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,171),('PREVIOUS_FUNDING',' List of previous funding applicant has received for the program they are applying for','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,172),('PREVIOUS_FUNDING_TYPE_CODE',' Funding categories that applicant has previously applied for.','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,173),('PROGRAM',' List of CDGA programs','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,174),('SERVICE_AREA',' Applicant address that will provide services for this program','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,175),('STREET',' list of valid city street names','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,176),('SYSTEM_MESSAGE',' Messages to be displayed on CDGA dashboard','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,177),('SYSTEM_MESSAGE_CATEGORY',' Categories for messages to be displayed on CDGA dashboard','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,178),('SYSTEM_SETTINGS',' Dates that system is available to users based upon their role','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,179),('WARDS_SERVED',' Adjacent wards that will be served by a delegate applications','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,180),('WARD_OFFICE',' List of aldermanic ward offices','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,181),('WORK_PROGRAM',' Performance measures for applicants','CDGA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,182),('Agencies',' Contains basic agency information','PMNTDA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,191),('Audits',' Contains basic audit information','PMNTDA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,192),('Staff',' Contains basic auditor information','PMNTDA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,193),('Users',' Contains basic system user information','PMNTDA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,194),('Visits',' Contains basic visit information','PMNTDA','chicago',NULL,NULL,NULL,NULL,NULL,NULL,NULL,195);
/*!40000 ALTER TABLE `dash_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_request`
--

DROP TABLE IF EXISTS `data_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_request` (
  `request_date` date DEFAULT NULL,
  `data_requested` varchar(50) DEFAULT NULL,
  `requester` varchar(50) DEFAULT NULL,
  `requester_org` varchar(50) DEFAULT NULL,
  `requester_email` varchar(50) DEFAULT NULL,
  `requester_phone` varchar(20) DEFAULT NULL,
  `need_by_date` date DEFAULT NULL,
  `data_made_public` bit(1) DEFAULT NULL,
  `descrip` varchar(1000) DEFAULT NULL,
  `purpose` varchar(1000) DEFAULT NULL,
  `sources` varchar(1000) DEFAULT NULL,
  `difficulty_score` int(11) DEFAULT NULL,
  `importance_score` int(11) DEFAULT NULL,
  `cost_score` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `status_notes` varchar(1000) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` date DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `id` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `difficulty_score` (`difficulty_score`),
  KEY `importance_score` (`importance_score`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_request`
--

LOCK TABLES `data_request` WRITE;
/*!40000 ALTER TABLE `data_request` DISABLE KEYS */;
INSERT INTO `data_request` VALUES ('2013-11-04','Teacher qualifications','Carolyn Newberry-Schwartz','Collaboration for Early Childhood','cnewberry@collab4kids.org','708-613-6122','2014-12-31','\0','Percent of teachers and directors in Oak Park and River Forest early childhood programs who have above minimum state educational requirements for their role. Percent of teachers and child care providers who have more than the state mandated 15 documented hours of continuing professional development each year.','The Collaboration works to increase the professional qualifications and skills of early care and education teachers and family child care providers through participation in professional development activities, college-level classes, and statewide quality enhancement initiatives like Great START, Quality Rating System and Gateways to Opportunity. The Collaboration fosters professional communities through its Directors Round Table and Family Child Care Provider Round Table.','ISBE teacher accreditation data',4,8,NULL,'Accepted - In Progress',NULL,'Request was sent to ISBE on 1-1-2012',NULL,NULL,NULL,NULL,'chapin',1);
/*!40000 ALTER TABLE `data_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_request_communication`
--

DROP TABLE IF EXISTS `data_request_communication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_request_communication` (
  `request_id` int(8) NOT NULL,
  `descrip` varchar(3000) DEFAULT NULL,
  `participants` varchar(300) DEFAULT NULL,
  `actionitems` varchar(3000) DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `request_id` (`request_id`),
  CONSTRAINT `data_request_communication_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`ID`),
  CONSTRAINT `data_request_communication_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_request_communication`
--

LOCK TABLES `data_request_communication` WRITE;
/*!40000 ALTER TABLE `data_request_communication` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_request_communication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_request_document`
--

DROP TABLE IF EXISTS `data_request_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_request_document` (
  `request_id` int(8) NOT NULL,
  `descrip` varchar(1000) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `request_id` (`request_id`),
  CONSTRAINT `data_request_document_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`ID`),
  CONSTRAINT `data_request_document_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_request_document`
--

LOCK TABLES `data_request_document` WRITE;
/*!40000 ALTER TABLE `data_request_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_request_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_set`
--

DROP TABLE IF EXISTS `data_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_set` (
  `data_set_name` varchar(100) DEFAULT NULL,
  `abbreviation` char(8) DEFAULT NULL,
  `data_source` char(10) DEFAULT NULL,
  `access_restricted` bit(1) DEFAULT b'1',
  `public` bit(1) DEFAULT b'0',
  `metadata_public` bit(1) DEFAULT b'0',
  `data_public` bit(1) DEFAULT b'0',
  `description` varchar(1000) DEFAULT NULL,
  `terms_of_use` varchar(300) DEFAULT NULL,
  `software_platform` varchar(30) DEFAULT NULL,
  `other_platform` varchar(30) DEFAULT NULL,
  `overall_quality` varchar(600) DEFAULT NULL,
  `overall_accuracy` varchar(600) DEFAULT NULL,
  `overall_completeness` varchar(600) DEFAULT NULL,
  `matchability` varchar(100) DEFAULT NULL,
  `periodicity` varchar(100) DEFAULT NULL,
  `granularity` varchar(40) DEFAULT NULL,
  `first_received` date DEFAULT NULL,
  `most_recent_update` date DEFAULT NULL,
  `initial_import_est_hours` int(5) DEFAULT NULL,
  `initial_import_comments` varchar(1000) DEFAULT NULL,
  `routine_import_est_hours` int(5) DEFAULT NULL,
  `routine_import_comments` varchar(1000) DEFAULT NULL,
  `data_quality_score` float(3,1) DEFAULT NULL,
  `importance_score` float(3,1) DEFAULT NULL,
  `difficulty_score` float(3,1) DEFAULT NULL,
  `cost_score` float(3,1) DEFAULT NULL,
  `data_cost_est` int(7) DEFAULT NULL,
  `data_cost_timeperiod` char(10) DEFAULT NULL,
  `data_cost_comments` varchar(1000) DEFAULT NULL,
  `owner` char(200) DEFAULT NULL,
  `contact_name` varchar(200) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_fax` varchar(20) DEFAULT NULL,
  `contact_address` varchar(50) DEFAULT NULL,
  `contact_address2` varchar(40) DEFAULT NULL,
  `contact_address3` varchar(40) DEFAULT NULL,
  `contact_city` varchar(30) DEFAULT NULL,
  `contact_state` char(2) DEFAULT NULL,
  `contact_zip` char(11) DEFAULT NULL,
  `url1` varchar(500) DEFAULT NULL,
  `url2` varchar(500) DEFAULT NULL,
  `url3` varchar(500) DEFAULT NULL,
  `internal_location` varchar(300) DEFAULT NULL,
  `transfer_method` varchar(100) DEFAULT NULL,
  `comments` varchar(4000) DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NULL DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `business_owner` varchar(100) DEFAULT NULL,
  `contact_information` varchar(600) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `import_flag` char(6) DEFAULT NULL,
  `database_name` varchar(100) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `id` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `hubid` (`hubid`),
  KEY `access_restricted` (`access_restricted`),
  KEY `data_source` (`data_source`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_set`
--

LOCK TABLES `data_set` WRITE;
/*!40000 ALTER TABLE `data_set` DISABLE KEYS */;
INSERT INTO `data_set` VALUES ('Child Care Tracking System','CCTS','IL DHS','','\0','\0','\0','The database system used by IDHS to track all eligibility and payment information for the child care program.','',NULL,NULL,'Quality is high in terms of consistency of data entry.','Accuracy is assumed to be high based on the fact that this data is generated by the billing process for providers of child care.','Completeness is good in that very few fields are empty...',NULL,'monthly','individual','1999-01-01','2013-12-31',80,'',32,'SAS import routine was performed regularly by Nila Barnes prior to 2014. New data format will require new import routines.  Temporary process created by Greg Sanders April2014 in Python.',4.0,5.0,4.0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,'2014-04-11 19:27:44',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `data_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_set_communication`
--

DROP TABLE IF EXISTS `data_set_communication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_set_communication` (
  `dataset_id` int(8) NOT NULL,
  `descrip` varchar(3000) DEFAULT NULL,
  `participants` varchar(300) DEFAULT NULL,
  `actionitems` varchar(3000) DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `dataset_id` (`dataset_id`),
  CONSTRAINT `data_set_communication_ibfk_1` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`),
  CONSTRAINT `data_set_communication_ibfk_2` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_set_communication`
--

LOCK TABLES `data_set_communication` WRITE;
/*!40000 ALTER TABLE `data_set_communication` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_set_communication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_set_document`
--

DROP TABLE IF EXISTS `data_set_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_set_document` (
  `dataset_id` int(8) NOT NULL,
  `phase` char(8) DEFAULT NULL,
  `descrip` varchar(1000) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `dataset_id` (`dataset_id`),
  CONSTRAINT `data_set_document_ibfk_1` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`),
  CONSTRAINT `data_set_document_ibfk_2` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_set_document`
--

LOCK TABLES `data_set_document` WRITE;
/*!40000 ALTER TABLE `data_set_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_set_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_set_x_request`
--

DROP TABLE IF EXISTS `data_set_x_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_set_x_request` (
  `request_id` int(8) NOT NULL,
  `dataset_id` int(8) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `dataset_id` (`dataset_id`),
  KEY `request_id` (`request_id`),
  CONSTRAINT `data_set_x_request_ibfk_1` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`),
  CONSTRAINT `data_set_x_request_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`ID`),
  CONSTRAINT `data_set_x_request_ibfk_3` FOREIGN KEY (`dataset_id`) REFERENCES `data_set` (`id`),
  CONSTRAINT `data_set_x_request_ibfk_4` FOREIGN KEY (`request_id`) REFERENCES `data_request` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_set_x_request`
--

LOCK TABLES `data_set_x_request` WRITE;
/*!40000 ALTER TABLE `data_set_x_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_set_x_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_source`
--

DROP TABLE IF EXISTS `data_source`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_source` (
  `source` varchar(250) NOT NULL,
  `source_url` varchar(400) DEFAULT NULL,
  `descrip` varchar(800) DEFAULT NULL,
  `restricted` bit(1) DEFAULT NULL,
  `terms_of_use` varchar(500) DEFAULT NULL,
  `nmfldfordatsrc` bigint(4) DEFAULT NULL,
  `abbrev` varchar(20) DEFAULT NULL,
  `contracts` varchar(200) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `update_user` varchar(20) DEFAULT NULL,
  `exclude` bit(1) DEFAULT NULL,
  `delete_row` bit(1) DEFAULT NULL,
  `hubid` char(10) DEFAULT NULL,
  `comments` varchar(600) DEFAULT NULL,
  `id` bigint(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_source`
--

LOCK TABLES `data_source` WRITE;
/*!40000 ALTER TABLE `data_source` DISABLE KEYS */;
INSERT INTO `data_source` VALUES ('Air Operators','null','null',NULL,'null',NULL,'AIROPERATO_OPERATORS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',1),('American Community Survey','null','null',NULL,'null',NULL,'AMERICANCO_ITYSURVEY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',2),('Amtrak Monthly Performance Reports','http://www.amtrak.com','null',NULL,'null',NULL,'AMTRAKMONT_CEREPORTS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',3),('Analysis by Center for Neighborhood Technology','http://www.cnt.org/','null',NULL,'null',NULL,'ANALYSISBY_ECHNOLOGY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',4),('Bird Conservation Network','http://www.bcnbirds.org/trends/index.htm','null',NULL,'null',NULL,'BIRDCONSER_ONNETWORK','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',5),('BUREAU OF LABOR STATISTICS','HTTP://WWW.BLS.GOV','The Bureau of Labor Statistics is the principal fact-finding agency for the Federal Government in the broad field of labor economics and statistics.',NULL,'null',NULL,'BUREAUOFLA_TATISTICS','null','2012-08-03 00:00:00','gsanders','2012-11-19 00:00:00','GMS','\0','\0','cmap','null',7),('Bureau of Transportation Statistics','http://www.bts.gov/programs/airline_information/','null',NULL,'null',NULL,'BUREAUOFTR_TATISTICS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',8),('Campaignmoney.com','http://www.campaignmoney.com','null',NULL,'null',NULL,'CAMPAIGNMO_MONEY.COM','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',9),('Center for Neighborhood Technology','http://www.cnt.org/','null',NULL,'null',NULL,'CENTERFORN_ECHNOLOGY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',10),('Centers for Disease Control and Prevention','http://apps.nccd.cdc.gov/ddtstrs/default.aspx','null',NULL,'null',NULL,'CENTERSFOR_REVENTION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',11),('Chicago Community Trust','http://cct.org','null',NULL,'null',NULL,'CHICAGOCOM_NITYTRUST','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',12),('Chicago Metropolitan Agency for Planning','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CHICAGOMET_RPLANNING','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',13),('Chicago Region Environmental and Transportation Efficiency Program (CREATE Program)','http://www.createprogram.org/index.htm','null',NULL,'null',NULL,'CHICAGOREG_EPROGRAM)','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',14),('Chicago Rehab Network','http://www.chicagorehab.org/','null',NULL,'null',NULL,'CHICAGOREH_ABNETWORK','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',15),('City of Chicago','http://www.cityofchicago.org/city/en/depts/bldgs.html','null',NULL,'null',NULL,'CITYOFCHIC_OFCHICAGO','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',16),('Claritas Research','http://www.claritas.com/sitereports/default.jsp','null',NULL,'null',NULL,'CLARITASRE_SRESEARCH','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',17),('CMAP: Municipal Plans Programs and Operations Survey','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAP:MUNIC_ONSSURVEY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',18),('CMAP','http://www.cmap.illinois.gov/cmp/measurement','null',NULL,'null',NULL,'CMAP_CMAP','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',19),('CMAP administrative records and IDOT','null','null',NULL,'null',NULL,'CMAPADMINI_DSANDIDOT','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',20),('CMAP Analysis of US Census Bureau and IRS Business Master Files (Exempt Organizations) data from NCCS','http://nccsdataweb.urban.org','null',NULL,'null',NULL,'CMAPANALYS_AFROMNCCS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',21),('CMAP Analysis of County Assessor Data','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAPANALYS_ESSORDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',22),('CMAP Analysis of IDOT Data','http://www.cmap.illinois.gov/freight-committee','null',NULL,'null',NULL,'CMAPANALYS_FIDOTDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',23),('CMAP Analysis of County Assessor Parcel Files','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAPANALYS_RCELFILES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',24),('CMAP analysis of U.S. Census Bureau data','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAPANALYS_UREAUDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',25),('CMAP and US Census','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAPANDUSC_DUSCENSUS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',26),('CMAP Bikeway Information System','http://www.cmap.illinois.gov/bike-ped/soles-and-spokes-plan/documents','null',NULL,'null',NULL,'CMAPBIKEWA_IONSYSTEM','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',27),('CMAP Land Use Inventory','http://www.cmap.illinois.gov','null',NULL,'null',NULL,'CMAPLANDUS_INVENTORY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',28),('CNT Analysis of Utilities Data','http://www.cnt.org/','null',NULL,'null',NULL,'CNTANALYSI_ITIESDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',29),('Compiled by CMAP from carriers timetables','null','null',NULL,'null',NULL,'COMPILEDBY_IMETABLES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',30),('Copyright 2011 President and Fellows of Harvard College. All rights reserved.','www.clustermapping.us','null',NULL,'null',NULL,'COPYRIGHT2_RESERVED.','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',31),('Council for Community and Economic Research','http://www.c2er.org/','null',NULL,'null',NULL,'COUNCILFOR_CRESEARCH','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',32),('County Business Patterns','http://www.census.gov/econ/cbp/index.html','null',NULL,'null',NULL,'COUNTYBUSI_SPATTERNS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',33),('County Business Patterns 2009','null','null',NULL,'null',NULL,'COUNTYBUSI_TERNS2009','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',34),('County Tax Assessors','null','null',NULL,'null',NULL,'COUNTYTAXA_ASSESSORS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',35),('CTA,Metra,Pace','null','null',NULL,'null',NULL,'CTA,METRA,_ETRA,PACE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',36),('Cultural Data Project','http://www.ilculturaldata.org/','null',NULL,'null',NULL,'CULTURALDA_TAPROJECT','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',37),('Dun and Bradstreet','http://www.dnbgov.com/','null',NULL,'null',NULL,'DUNANDBRAD_RADSTREET','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',38),('Emilia Istrate and Nicholas Marchio,Export Nation 2012 (Washington,DC: Brookings Institution,2012)','http://www.brookings.edu','null',NULL,'null',NULL,'EMILIAISTR_ION,2012)','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',39),('Federal Communications Commission','http://hraunfoss.fcc.gov/edocs_public/','null',NULL,'null',NULL,'FEDERALCOM_OMMISSION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',40),('Federal Financial Institutions Examination Council','http://www.ffiec.gov','null',NULL,'null',NULL,'FEDERALFIN_ONCOUNCIL','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',41),('FFIEC,CRA aggregate file','http://www.ffiec.gov/','null',NULL,'null',NULL,'FFIEC,CRAA_EGATEFILE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',42),('Health Resources and Services Administration','http://muafind.hrsa.gov/','null',NULL,'null',NULL,'HEALTHRESO_ISTRATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',43),('Highway Performance Monitoring System','null','null',NULL,'null',NULL,'HIGHWAYPER_INGSYSTEM','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',44),('HUD/USPS','http://www.huduser.org/portal/datasets/usps.html','null',NULL,'null',NULL,'HUD/USPS_HUD/USPS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',45),('IDOT Division of Traffic Safety','http://www.dot.state.il.us/safety.html','null',NULL,'null',NULL,'IDOTDIVISI_FICSAFETY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',46),('IEPA','http://www.epa.state.il.us','null',NULL,'null',NULL,'IEPA_IEPA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',47),('Illinois Behavioral Risk Factor Surveillance System','http://app.idph.state.il.us/brfss/','null',NULL,'null',NULL,'ILLINOISBE_NCESYSTEM','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',48),('Illinois Board of Higher Ed','http://www.ibhe.state.il.us/','null',NULL,'null',NULL,'ILLINOISBO_FHIGHERED','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',49),('Illinois Commerce Commission','null','null',NULL,'null',NULL,'ILLINOISCO_OMMISSION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',50),('Illinois Department of Human Services,Net EBT Supplemental Nutrition Assistance Program Issuances','null','null',NULL,'null',NULL,'ILLINOISDE_ISSUANCES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',51),('Illinois Department of Public Health','http://app.idph.state.il.us/IPLANDataSystem.asp?menu=1','null',NULL,'null',NULL,'ILLINOISDE_LICHEALTH','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',52),('Illinois Department of Revenue','http://www.revenue.state.il.us/','null',NULL,'null',NULL,'ILLINOISDE_OFREVENUE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',53),('Illinois Department of Transportation','http://www.dot.il.gov/saferoutes/SafeRoutesHome.aspx','null',NULL,'null',NULL,'ILLINOISDE_PORTATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',54),('Illinois Department of Employment Security','http://www.ides.state.il.us/','null',NULL,'null',NULL,'ILLINOISDE_TSECURITY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',55),('Illinois Department of Children and Family Services','http://www.state.il.us/dcfs/library/com_communications_zipcants.shtml','null',NULL,'null',NULL,'ILLINOISDE_YSERVICES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',56),('Illinois Early Childhood Asset Map','http://iecam.crc.uiuc.edu/','null',NULL,'null',NULL,'ILLINOISEA_DASSETMAP','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',57),('Illinois Environmental Protection Agency','http://www.epa.state.il.us/air/air-quality-report/','null',NULL,'null',NULL,'ILLINOISEN_IONAGENCY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',58),('Illinois Environmental Protection Agency and US Census Bureau','http://www.epa.state.il.us/land/site-remediation/site-remediation-faq.html','null',NULL,'null',NULL,'ILLINOISEN_SUSBUREAU','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',59),('Illinois Natural Areas Inventory','http://www.inhs.illinois.edu/research/inai/','null',NULL,'null',NULL,'ILLINOISNA_INVENTORY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',60),('Illinois Office of Child Support Enforcement','http://www.childsupportillinois.com/','null',NULL,'null',NULL,'ILLINOISOF_FORCEMENT','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',61),('Illinois Roadway Information System','http://www.dot.state.il.us/iris/tableA.html','null',NULL,'null',NULL,'ILLINOISRO_IONSYSTEM','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',62),('Illinois State Police','http://www.isp.state.il.us/crime/ucrhome.cfm','null',NULL,'null',NULL,'ILLINOISST_ATEPOLICE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',63),('Illinois State Board of Education','http://www.isbe.state.il.us/','null',NULL,'null',NULL,'ILLINOISST_EDUCATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',64),('Illinois State Board of Elections','http://www.elections.il.gov/','null',NULL,'null',NULL,'ILLINOISST_ELECTIONS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',65),('Illinois State Board of Elections and US Census Bureau','http://www.elections.il.gov/','null',NULL,'null',NULL,'ILLINOISST_SUSBUREAU','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',66),('Illinois Youth Survey','http://www.illinoisyouthsurvey.org/','null',NULL,'null',NULL,'ILLINOISYO_UTHSURVEY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',67),('Institute of Museum and library Services','http://www.imls.gov/','null',NULL,'null',NULL,'INSTITUTEO_YSERVICES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',68),('Integrated Postsecondary Education Data System (IPEDS)','http://nces.ed.gov/ipeds/','null',NULL,'null',NULL,'INTEGRATED_EM(IPEDS)','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',69),('International Trade Administration and USA Trade Online','null','null',NULL,'null',NULL,'INTERNATIO_ADEONLINE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',70),('IRS Business Master Files (Exempt Organizations) data from NCCS','http://nccsdataweb.urban.org','null',NULL,'null',NULL,'IRSBUSINES_AFROMNCCS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',71),('MCIC Analysis of US Census Bureau and Voting Precinct Data','http://www.mcic.org','null',NULL,'null',NULL,'MCICANALYS_CINCTDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',72),('Metra','www.metrarail.com','null',NULL,'null',NULL,'METRA_METRA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',73),('Metrostudy','http://www.metrostudy.com/view_market.php?id=13','null',NULL,'null',NULL,'METROSTUDY_ETROSTUDY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',74),('Moodys','http://www.moodys.com/','null',NULL,'null',NULL,'MOODYS_MOODYS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',75),('National Bridge Inventory','http://www.fhwa.dot.gov/bridge/nbi.htm','null',NULL,'null',NULL,'NATIONALBR_INVENTORY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',76),('National Center for Education Statistics,IPEDS','http://nces.ed.gov/ipeds/','null',NULL,'null',NULL,'NATIONALCE_ICS,IPEDS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',77),('National Center for Education Statistics','http://nces.ed.gov/ipeds/','null',NULL,'null',NULL,'NATIONALCE_TATISTICS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',78),('National Register of Historic Places','http://www.nps.gov/nr/','null',NULL,'null',NULL,'NATIONALRE_RICPLACES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',79),('National Science Foundation','http://www.nsf.gov/statistics/rdexpenditures/','null',NULL,'null',NULL,'NATIONALSC_OUNDATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',80),('National Transit Database and CMAP','http://www.ntdprogram.gov/ntdprogram/','null',NULL,'null',NULL,'NATIONALTR_SEANDCMAP','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',81),('National Transit Database','http://www.ntdprogram.gov/ntdprogram/','null',NULL,'null',NULL,'NATIONALTR_TDATABASE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',82),('Natl.Ctr.for Charitable Statistics','http://nccs.urban.org/','null',NULL,'null',NULL,'NATL.CTR.F_TATISTICS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',83),('NCES,National Assessment of Adult Literacy','http://nces.ed.gov/naal/','null',NULL,'null',NULL,'NCES,NATIO_TLITERACY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',84),('NIU: Illinois Water Resources Center','http://web.extension.illinois.edu/iwrc/','null',NULL,'null',NULL,'NIU:ILLINO_CESCENTER','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',85),('Operating Companies','null','null',NULL,'null',NULL,'OPERATINGC_COMPANIES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',86),('Pace','www.pacebus.com','null',NULL,'null',NULL,'PACE_PACE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',87),('Prepared by Chicago Metropolitan Agency for Planning Using IDOT and Illinois Tollway data','null','null',NULL,'null',NULL,'PREPAREDBY_LLWAYDATA','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',88),('Quarterly Census of Employment and Wages,Burea of Labor Statistics','http://www.bls.gov/cew/','null',NULL,'null',NULL,'QUARTERLYC_TATISTICS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',89),('Railroads via AAR Performance Measurement; USACE Navigation Data Center','null','null',NULL,'null',NULL,'RAILROADSV_ATACENTER','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',90),('Record Information Services','http://www.public-record.com','null',NULL,'null',NULL,'RECORDINFO_NSERVICES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',91),('RTAMS','http://www.rtams.org/rtams/home.jsp','null',NULL,'null',NULL,'RTAMS_RTAMS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',92),('Scarborough Research','http://www.scarborough.com/','null',NULL,'null',NULL,'SCARBOROUG_HRESEARCH','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',93),('The Chicago Transit Authority','www.transitchicago.com','null',NULL,'null',NULL,'THECHICAGO_AUTHORITY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',94),('The National Transit Database and CMAP','http://www.ntdprogram.gov/ntdprogram/data.htm','null',NULL,'null',NULL,'THENATIONA_SEANDCMAP','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',95),('The Tax Foundation','http://www.taxfoundation.org/publications/show/22693.html','null',NULL,'null',NULL,'THETAXFOUN_OUNDATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',96),('U.S. Department of Agriculture,Census of Agriculture','http://www.agcensus.usda.gov','null',NULL,'null',NULL,'U.S.DEPART_RICULTURE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',97),('US Bureau of Economic Analysis','http://www.bea.gov/','null',NULL,'null',NULL,'USBUREAUOF_CANALYSIS','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',98),('US Census Bureau,Foreign Trade Division','http://www.census.gov','null',NULL,'null',NULL,'USCENSUSBU_EDIVISION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',99),('US Census Bureau','http://www.census.gov','null',NULL,'null',NULL,'USCENSUSBU_SUSBUREAU','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',100),('US Deparment of Transportation','null','null',NULL,'null',NULL,'USDEPARMEN_PORTATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',101),('US Department of Agriculture','http://www.agcensus.usda.gov/','null',NULL,'null',NULL,'USDEPARTME_RICULTURE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',102),('US Dept of Education,Graduation Rate Survey','http://nces.ed.gov/ipeds/','null',NULL,'null',NULL,'USDEPTOFED_ATESURVEY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',103),('US Geological Survey','http://water.usgs.gov/watuse/data/2005/index.html','null',NULL,'null',NULL,'USGEOLOGIC_CALSURVEY','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',104),('USGS - Water Use in the United States','http://water.usgs.gov/watuse/','null',NULL,'null',NULL,'USGS-WATER_TEDSTATES','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',105),('US Patent and Trademark Office','http://www.uspto.gov/','null',NULL,'null',NULL,'USPATENTAN_ARKOFFICE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',106),('US Substance Abuse and Mental Health Services Administration','http://www.oas.samhsa.gov/nsduh.htm','null',NULL,'null',NULL,'USSUBSTANC_ISTRATION','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',107),('Woodstock Institute','null','null',NULL,'null',NULL,'WOODSTOCKI_INSTITUTE','null','2012-08-03 00:00:00','gsanders','2012-08-03 00:00:00','null','\0','\0','cmap','null',108);
/*!40000 ALTER TABLE `data_source` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'test1','pass1','test1@example.com'),(2,'test2','pass2','test2@example.com'),(3,'test3','pass3','test3@example.com'),(4,'test4','pass4','test4@example.com'),(5,'test5','pass5','test5@example.com'),(6,'test6','pass6','test6@example.com'),(7,'test7','pass7','test7@example.com'),(8,'test8','pass8','test8@example.com'),(9,'test9','pass9','test9@example.com'),(10,'test10','pass10','test10@example.com'),(11,'test11','pass11','test11@example.com'),(12,'test12','pass12','test12@example.com'),(13,'test13','pass13','test13@example.com'),(14,'test14','pass14','test14@example.com'),(15,'test15','pass15','test15@example.com'),(16,'test16','pass16','test16@example.com'),(17,'test17','pass17','test17@example.com'),(18,'test18','pass18','test18@example.com'),(19,'test19','pass19','test19@example.com'),(20,'test20','pass20','test20@example.com'),(21,'test21','pass21','test21@example.com');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-11 14:40:55
