USE metadash;

UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='IL CPD ARRESTS, INCIDENTS, MURDERS 1999 -' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_EXPLORE' WHERE UPPER(data_requested)='CPS EXPLORE_2004TO2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='CPS GRADES101' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='CPS GRADES102' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='IL CPS ELEMENTARY GRADES - SY2013' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ISAT' WHERE UPPER(data_requested)='CPS ISAT 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ISAT' WHERE UPPER(data_requested)='IL CPS ISAT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES_HS_QTR' WHERE UPPER(data_requested)='CPS HS QUARTER GRADES EOY11' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES_HS_SEM' WHERE UPPER(data_requested)='CPS HS SEMESTER GRADES EOY11' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES_HS_SEM' WHERE UPPER(data_requested)='IL CPS HS SEMGRADES SUMMER12' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES_HS_SEM' WHERE UPPER(data_requested)='IL CPS HS SEMGRADES ALL 2013' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_INCIDENT_VICTIM' WHERE UPPER(data_requested)='IL CPS SY2011 INCIDENTS /VICTIMS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='IL CPS MASTER' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='IL CPS MASTER - ACTIVE 20130628' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='IL CPS MASTER 20130628' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='IL CPS MASTER FILE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PSAE' WHERE UPPER(data_requested)='IL CPS PSAE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PSAE' WHERE UPPER(data_requested)='IL CPS PSAE FY 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCC_VIOLATIONS' WHERE UPPER(data_requested)='IL CPS SY2011 SCC VIOLATIONS WVICTIMS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCC_VIOLATIONS' WHERE UPPER(data_requested)='SCC_INFRACTIONS_SSY2011_06111' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCHEDULES' WHERE UPPER(data_requested)='IL CPS SCHEDULES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCHOOL_DIRECTORY' WHERE UPPER(data_requested)='IL CPS SCHOOLS - DIRECTORY' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SVC_LEARN_HRS' WHERE UPPER(data_requested)='IL CPS SERVICE LEARNING HOURS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='CPS STUDENT_ATTENDANCE_SUMM' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='IL CPS STUDENT ATTENDANCE SY2008' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='IL CPS STUDENT ATTENDANCE SY2009' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='CPS STUDENT_ATTENDANCE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='IL CPS DROPOUT VERIFICATION FY09' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='IL CPS DROPOUT VERIFICATION FY10' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='IL CPS DROPOUT VERIFICATION FY11' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='IL CPS DROPOUT VERIFICATION DATA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ERLYCHD_NEEDASMT' WHERE UPPER(data_requested)='IL CPS EARLY CHILDHOOD NEEDS ASSESSEMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TEST_SCORE' WHERE UPPER(data_requested)='IL CPS TEST SCORE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='IL CPS TPPI' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_INTEGRATASMT' WHERE UPPER(data_requested)='IL DCFS IA PLACEMENT TRACKING' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_INTEGRATASMT' WHERE UPPER(data_requested)='IL DCFS IA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_INTEGRATASMT' WHERE UPPER(data_requested)='IL DCFS IA INTEGRATED ASSESSMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_INTEGRATASMT' WHERE UPPER(data_requested)='IL DCFS IA INTERGRATED ASSESSMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_INTEGRATASMT' WHERE UPPER(data_requested)='IL DCFS INTEGRATED ASSESSMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_FAMILY_TRACK' WHERE UPPER(data_requested)='IL DCFS IA FAMILY TRACKING' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CANTS' WHERE UPPER(data_requested)='IL DCFS CANTS (Aug. 2011)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CASENOTES' WHERE UPPER(data_requested)='IL DCFS Case Notes' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DCFS CYCIS (July 2011)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DCFS CYCIS 201012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DCFS CYCIS BOARD PAYMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DCFS CYCIS SEPT. 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DCFS CYCIS VOUCHER PAYMENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_CYCIS' WHERE UPPER(data_requested)='IL DFCS CYCIS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_IL_OUTCOMES' WHERE UPPER(data_requested)='IL DCFS IL OUTCOME' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_IL_OUTCOMES' WHERE UPPER(data_requested)='IL DCFS OUTCOME' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_IL_OUTCOMES' WHERE UPPER(data_requested)='IL DCFS IL. OUTCOMES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DCFS', data_set_abbrev='IL_DCFS_IL_OUTCOMES' WHERE UPPER(data_requested)='IL DCFS OUTCOMES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_CCTS' WHERE UPPER(data_requested)='DHS CCTS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_CDB' WHERE UPPER(data_requested)='DHS CDB' AND rowsource='smartsheet';
/* UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_TANF' WHERE UPPER(data_requested)=' AND rowsource='smartsheet';  */
UPDATE outbound_data_request SET data_source_abbrev='IDES', data_set_abbrev='IL_DES_WAGE' WHERE UPPER(data_requested)='IL DES WAGE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_NSC', data_set_abbrev='IL_NSC' WHERE UPPER(data_requested)='IL NSC' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_NSC', data_set_abbrev='IL_NSC_CWIC_ENROLMT' WHERE UPPER(data_requested)='IL NSC CWIC ENROLLMENT 2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CDPH', data_set_abbrev='CDPH_BIRTH_RECORDS' WHERE UPPER(data_requested)='BIRTH RECORDS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CDPH', data_set_abbrev='CDPH_DEATH_RECORDS' WHERE UPPER(data_requested)='DEATH RECORDS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CDPH', data_set_abbrev='CDPH_OBESITY' WHERE UPPER(data_requested)='OBESITY RECORDS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='CITYSPAN ATTENDANCE - OCT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='CITYSPAN ATTENDANCE - JAN' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='CITYSPAN ATTENDANCE - APR' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='CITYSPAN ATTENDANCE - MAY' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='CITYSPAN ATTENDANCE - JUL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_DPH', data_set_abbrev='COOK_DPH_CHILD_LEAD' WHERE UPPER(data_requested)='CHILDHOOD LEAD LEVELS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_DPH', data_set_abbrev='COOK_DPH_INF_DISEASE' WHERE UPPER(data_requested)='INFECTIOUS DISEASES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_JUVCT', data_set_abbrev='COOK_JUVCT_CHILD_PR' WHERE UPPER(data_requested)='CHILD PROTECTION 2007-JAN 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_JUVCT', data_set_abbrev='COOK_JUVCT_JUV_JUST' WHERE UPPER(data_requested)='JUVENILE JUSTICE 2007-JAN 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_JUVCT', data_set_abbrev='COOK_JUVCT_JUV_JUST' WHERE UPPER(data_requested)='JUVENILE JUSTICE 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='COOK_JUVCT', data_set_abbrev='COOK_JUVCT_JUV_JUST' WHERE UPPER(data_requested)='JUVENILE JUSTICE 2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='ARRESTS 1999-NOVEMBER 30, 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='ARRESTS 1999-NOVEMBER 30, 2011 with IR & DOB (Crime Lab request)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='ARRESTS 1999-SEPTEMBER 15, 2012 (IR & DOB)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)=' ARRESTS 1999-DECEMBER 31, 2012 (IR,DOB)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='ARRESTS 1999-MAY 2014' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_INCIDENTS' WHERE UPPER(data_requested)='INCIDENTS 1999-NOVEMBER 30, 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_INCIDENTS' WHERE UPPER(data_requested)='INCIDENTS 1999-DECEMBER 31, 2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_INCIDENTS' WHERE UPPER(data_requested)='INCIDENTS 1999-MAY 2014' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_MURDERS' WHERE UPPER(data_requested)='MURDERS 1999-NOVEMBER 30, 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_MURDERS' WHERE UPPER(data_requested)='MURDER, OFFENDER, WEAPONS, MOTIVES 1/1/2007 TO 4/30/2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_MURDERS' WHERE UPPER(data_requested)='MURDERS 1999-DECEMBER 31, 2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_MURDERS' WHERE UPPER(data_requested)='MURDERS 1999-DECEMBER 31, 2013' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_MURDERS' WHERE UPPER(data_requested)='MURDERS 1999-MAY 2014' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_DISPOSITION' WHERE UPPER(data_requested)='DISPOSITION DATA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='ATTENDANCE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='ATTENDANCE SY2008-SY2009' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ATTENDANCE' WHERE UPPER(data_requested)='DETAILED ATTENDANCE DATA SY2010-2013' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='DROPOUT VERIFICATION 1997-2008' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='DROPOUT VERIFICATION SY2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_DROPOUT_VERIF' WHERE UPPER(data_requested)='DROPOUT VERIFICATION' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_EXPLORE' WHERE UPPER(data_requested)='EXPLORE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_EXPLORE' WHERE UPPER(data_requested)='EXPLORE 2004-2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_EXPLORE' WHERE UPPER(data_requested)='EXPLORE (Fall)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_EXPLORE' WHERE UPPER(data_requested)='EXPLORE (Spring)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='GRADES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='GRADES SY2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='ELEMENTARY GRADES SY2008-SY2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='Q1 - ELEMENTARY & HIGH SCHOOL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='Q2 - ELEMENTARY & HIGH SCHOOL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='Q3 - ELEMENTARY & HIGH SCHOOL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='Q4 - ELEMENTARY & HIGH SCHOOL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_GRADES' WHERE UPPER(data_requested)='SY2013 FINAL - ELEMENTARY & HIGH SCHOOL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_INCIDENT' WHERE UPPER(data_requested)=' INCIDENT_VICTIM' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ISAT' WHERE UPPER(data_requested)='ISAT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ISAT' WHERE UPPER(data_requested)='ISAT SY2009' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='MASTER FILE (Fall)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='MASTER FILE (Spring)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MASTER' WHERE UPPER(data_requested)='MASTER FILE (January)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MISCONDUCT' WHERE UPPER(data_requested)='MISCONDUCT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MISCONDUCT' WHERE UPPER(data_requested)='MISCONDUCT SY2007-SY2009' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MISCONDUCT' WHERE UPPER(data_requested)='DISCIPLINE (MISCONDUCT_DATA, MISCONDUCT_ACTION)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MISCONDUCT' WHERE UPPER(data_requested)='DISCIPLINE (MISCONDUCT - ONE FILE THIS YEAR)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MISCONDUCT' WHERE UPPER(data_requested)='DISCIPLINE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MY_VOICE_MY_SCHL' WHERE UPPER(data_requested)='MY VOICE, MY SCHOOL SURVEY - SY2011-SY2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MY_VOICE_MY_SCHL' WHERE UPPER(data_requested)='MY VOICE MY SCHOOL SURVEY' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ONTRACK' WHERE UPPER(data_requested)='FRESHMAN ON-TRACK SY1997-2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ONTRACK' WHERE UPPER(data_requested)='FRESHMAN ON TRACK' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PSAE' WHERE UPPER(data_requested)='PSAE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PSAE' WHERE UPPER(data_requested)='PSAE SY2009' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PSAE' WHERE UPPER(data_requested)='PSAE SY2006-SY2008' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PERSONNEL' WHERE UPPER(data_requested)='TEACHER PERSONNEL SY2007-SY2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PLAN' WHERE UPPER(data_requested)='PLAN (FALL)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PLAN' WHERE UPPER(data_requested)='PLAN (SPRING)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCHEDULES' WHERE UPPER(data_requested)='SCHEDULES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCHEDULES' WHERE UPPER(data_requested)='SCHEDULES SY2008-SY2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_SCHOOLS' WHERE UPPER(data_requested)='SCHOOLS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_STUDENT_NAMES' WHERE UPPER(data_requested)='STUDENT NAMES/SSNs' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='STUDENT SURVEY - POST' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='STUDENT SURVEY - PRE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='CONSENT AND ASSENT ROSTER' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='FACILITATOR LOG (MONTHLY? QUARTERLY?)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='OBSERVATION LOG' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='TOP ATTENDANCE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='SERVICE LEARNING SY2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='SERVICE LEARNING SY2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='SEQUENCING PLANS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_TPPI' WHERE UPPER(data_requested)='ACTIVITY LIST' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IDES', data_set_abbrev='IDES_UNEMP_INSUR' WHERE UPPER(data_requested)='UNEMPLOYMENT INSURANCE BENEFITS 2006-PRESENT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IDES', data_set_abbrev='IDES_UNEMP_INSUR' WHERE UPPER(data_requested)='CPS UI WAGES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IDES', data_set_abbrev='IDES_UNEMP_INSUR' WHERE UPPER(data_requested)='IDHS UI WAGES 1999-2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_HFS', data_set_abbrev='IL_HFS_MEDICAID' WHERE UPPER(data_requested)='MEDICAID FY2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_HFS', data_set_abbrev='IL_HFS_MEDICAID' WHERE UPPER(data_requested)='MEDICAID FOR DJJ AFTERCARE PILOT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_HFS', data_set_abbrev='IL_HFS_MEDICAID' WHERE UPPER(data_requested)='MEDICAID ER INDICATORS 2002-2005' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_HFS', data_set_abbrev='IL_HFS_MEDICAID' WHERE UPPER(data_requested)='MEDICAID FY2011 AND FY2012 (PRESCRIPTION, ELIGIBILITY, ER INDICATOR, PROCEDURE & DIAGNOSIS CODES)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DJJ', data_set_abbrev='IL_DJJ_ADMISSN_EXIT' WHERE UPPER(data_requested)='ADMISSIONS & EXITS FY2009-FY2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DJJ', data_set_abbrev='IL_DJJ_ADMISSN_EXIT' WHERE UPPER(data_requested)='ADMISSIONS & EXITS Jul-Oct 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DJJ', data_set_abbrev='IL_DJJ_ADMISSN_EXIT' WHERE UPPER(data_requested)='ADMISSIONS & EXITS Nov 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DJJ', data_set_abbrev='IL_DJJ_ADMISSN_EXIT' WHERE UPPER(data_requested)='ADMISSIONS & EXITS Dec 2011' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DJJ', data_set_abbrev='IL_DJJ_ADMISSN_EXIT' WHERE UPPER(data_requested)='ADMISSIONS & EXITS Jan 2012' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_OUNCE_PREVENT' WHERE UPPER(data_requested)='INDICATORS FOR OUNCE COMMUNITY ASSESSMENTS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_SNAP_TANF' WHERE UPPER(data_requested)='2011 TANF, SNAP & MEDICAID ENROLLMENT BY CCA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_SNAP_TANF' WHERE UPPER(data_requested)='2006-2010 TANF, SNAP & MEDICAID ENROLLMENT FOR OUNCE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_SNAP_TANF' WHERE UPPER(data_requested)='2012 TANF, SNAP & MEDICAID ENROLLMENT BY CCA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DHS', data_set_abbrev='IL_DHS_SNAP_TANF' WHERE UPPER(data_requested)='2013 TANF, SNAP & MEDICAID ENROLLMENT BY CCA' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='VITAL STATISTICS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='HIV/AIDS PREVALENCE' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='INFECTIOUS DISEASES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='CHILDHOOD LEAD LEVELS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='VITAL STATISTICS' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='IL_DPH', data_set_abbrev='IL_DPH_OUNCE_PREVENT' WHERE UPPER(data_requested)='INFECTIOUS DISEASES' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='GEDTEST', data_set_abbrev='GED_TESTSVC_CWICSTAT' WHERE UPPER(data_requested)='CPS COHORTS FOR CWICSTATS' AND rowsource='smartsheet';

UPDATE outbound_data_request SET data_source_abbrev='CPD', data_set_abbrev='CPD_ARRESTS' WHERE UPPER(data_requested)='ARRESTS 1999-DECEMBER 31, 2012 (IR, DOB)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_STUDENT_NAMES' WHERE UPPER(data_requested)='STUDENT NAMES/SSNS (FALL)' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PLAN' WHERE UPPER(data_requested)='PLAN' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_PLAN' WHERE UPPER(data_requested)='PLAN 2004-2010' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_INCIDENT_VICTIM' WHERE UPPER(data_requested)='INCIDENT_VICTIM' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='ATTENDANCE - CITYSPAN - OCT' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='ATTENDANCE - CITYSPAN - MAR' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CITYSPAN', data_set_abbrev='CITYSPAN_ATTENDANCE' WHERE UPPER(data_requested)='ATTENDANCE - CITYSPAN - JUL' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_MY_VOICE_MY_SCHL' WHERE UPPER(data_requested)='MY VOICE, MY SCHOOL SURVEY - SY2011 - SY2014' AND rowsource='smartsheet';
UPDATE outbound_data_request SET data_source_abbrev='CPS', data_set_abbrev='CPS_ONTRACK' WHERE UPPER(data_requested)='FRESHMAN ON-TRACK' AND rowsource='smartsheet';