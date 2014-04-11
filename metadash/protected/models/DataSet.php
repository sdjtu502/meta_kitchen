<?php

/**
 * This is the model class for table "data_set".
 *
 * The followings are the available columns in table 'data_set':
 * @property string $data_set_name
 * @property string $abbreviation
 * @property string $data_source
 * @property integer $access_restricted
 * @property integer $public
 * @property integer $metadata_public
 * @property integer $data_public
 * @property string $description
 * @property string $terms_of_use
 * @property string $software_platform
 * @property string $other_platform
 * @property string $overall_quality
 * @property string $overall_accuracy
 * @property string $overall_completeness
 * @property string $matchability
 * @property string $periodicity
 * @property string $granularity
 * @property string $first_received
 * @property string $most_recent_update
 * @property integer $initial_import_est_hours
 * @property string $initial_import_comments
 * @property integer $routine_import_est_hours
 * @property string $routine_import_comments
 * @property double $data_quality_score
 * @property double $importance_score
 * @property double $difficulty_score
 * @property double $cost_score
 * @property integer $data_cost_est
 * @property string $data_cost_timeperiod
 * @property string $data_cost_comments
 * @property string $owner
 * @property string $contact_name
 * @property string $contact_email
 * @property string $contact_phone
 * @property string $contact_fax
 * @property string $contact_address
 * @property string $contact_address2
 * @property string $contact_address3
 * @property string $contact_city
 * @property string $contact_state
 * @property string $contact_zip
 * @property string $url1
 * @property string $url2
 * @property string $url3
 * @property string $internal_location
 * @property string $transfer_method
 * @property string $comments
 * @property string $creator
 * @property string $update_user
 * @property string $date_created
 * @property string $last_updated
 * @property integer $views
 * @property string $business_owner
 * @property string $contact_information
 * @property integer $exclude
 * @property integer $delete_row
 * @property string $import_flag
 * @property string $database_name
 * @property string $hubid
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property DataSetCommunication[] $dataSetCommunications
 * @property DataSetDocument[] $dataSetDocuments
 * @property DataSetXRequest[] $dataSetXRequests
 */
class DataSet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_set';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('access_restricted, public, metadata_public, data_public, initial_import_est_hours, routine_import_est_hours, data_cost_est, views, exclude, delete_row', 'numerical', 'integerOnly'=>true),
			array('data_quality_score, importance_score, difficulty_score, cost_score', 'numerical'),
			array('data_set_name, matchability, periodicity, contact_email, transfer_method, business_owner, database_name', 'length', 'max'=>100),
			array('abbreviation', 'length', 'max'=>8),
			array('data_source, data_cost_timeperiod, hubid', 'length', 'max'=>10),
			array('description, initial_import_comments, routine_import_comments, data_cost_comments', 'length', 'max'=>1000),
			array('terms_of_use, internal_location', 'length', 'max'=>300),
			array('software_platform, other_platform, contact_city', 'length', 'max'=>30),
			array('overall_quality, overall_accuracy, overall_completeness, contact_information', 'length', 'max'=>600),
			array('granularity, contact_address2, contact_address3', 'length', 'max'=>40),
			array('owner, contact_name', 'length', 'max'=>200),
			array('contact_phone, contact_fax, creator, update_user', 'length', 'max'=>20),
			array('contact_address', 'length', 'max'=>50),
			array('contact_state', 'length', 'max'=>2),
			array('contact_zip', 'length', 'max'=>11),
			array('url1, url2, url3', 'length', 'max'=>500),
			array('comments', 'length', 'max'=>4000),
			array('import_flag', 'length', 'max'=>6),
			array('first_received, most_recent_update, date_created, last_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('data_set_name, abbreviation, data_source, access_restricted, public, metadata_public, data_public, description, terms_of_use, software_platform, other_platform, overall_quality, overall_accuracy, overall_completeness, matchability, periodicity, granularity, first_received, most_recent_update, initial_import_est_hours, initial_import_comments, routine_import_est_hours, routine_import_comments, data_quality_score, importance_score, difficulty_score, cost_score, data_cost_est, data_cost_timeperiod, data_cost_comments, owner, contact_name, contact_email, contact_phone, contact_fax, contact_address, contact_address2, contact_address3, contact_city, contact_state, contact_zip, url1, url2, url3, internal_location, transfer_method, comments, creator, update_user, date_created, last_updated, views, business_owner, contact_information, exclude, delete_row, import_flag, database_name, hubid, id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'dataSetCommunications' => array(self::HAS_MANY, 'DataSetCommunication', 'dataset_id'),
			'dataSetDocuments' => array(self::HAS_MANY, 'DataSetDocument', 'dataset_id'),
			'dataSetXRequests' => array(self::HAS_MANY, 'DataSetXRequest', 'dataset_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'data_set_name' => 'Data Set Name',
			'abbreviation' => 'Abbreviation',
			'data_source' => 'Data Source',
			'access_restricted' => 'Access Restricted',
			'public' => 'Public',
			'metadata_public' => 'Metadata Public',
			'data_public' => 'Data Public',
			'description' => 'Description',
			'terms_of_use' => 'Terms Of Use',
			'software_platform' => 'Software Platform',
			'other_platform' => 'Other Platform',
			'overall_quality' => 'Overall Quality',
			'overall_accuracy' => 'Overall Accuracy',
			'overall_completeness' => 'Overall Completeness',
			'matchability' => 'Matchability',
			'periodicity' => 'Periodicity',
			'granularity' => 'Granularity',
			'first_received' => 'First Received',
			'most_recent_update' => 'Most Recent Update',
			'initial_import_est_hours' => 'Initial Import Est Hours',
			'initial_import_comments' => 'Initial Import Comments',
			'routine_import_est_hours' => 'Routine Import Est Hours',
			'routine_import_comments' => 'Routine Import Comments',
			'data_quality_score' => 'Data Quality Score',
			'importance_score' => 'Importance Score',
			'difficulty_score' => 'Difficulty Score',
			'cost_score' => 'Cost Score',
			'data_cost_est' => 'Data Cost Est',
			'data_cost_timeperiod' => 'Data Cost Timeperiod',
			'data_cost_comments' => 'Data Cost Comments',
			'owner' => 'Owner',
			'contact_name' => 'Contact Name',
			'contact_email' => 'Contact Email',
			'contact_phone' => 'Contact Phone',
			'contact_fax' => 'Contact Fax',
			'contact_address' => 'Contact Address',
			'contact_address2' => 'Contact Address2',
			'contact_address3' => 'Contact Address3',
			'contact_city' => 'Contact City',
			'contact_state' => 'Contact State',
			'contact_zip' => 'Contact Zip',
			'url1' => 'Url1',
			'url2' => 'Url2',
			'url3' => 'Url3',
			'internal_location' => 'Internal Location',
			'transfer_method' => 'Transfer Method',
			'comments' => 'Comments',
			'creator' => 'Creator',
			'update_user' => 'Update User',
			'date_created' => 'Date Created',
			'last_updated' => 'Last Updated',
			'views' => 'Views',
			'business_owner' => 'Business Owner',
			'contact_information' => 'Contact Information',
			'exclude' => 'Exclude',
			'delete_row' => 'Delete Row',
			'import_flag' => 'Import Flag',
			'database_name' => 'Database Name',
			'hubid' => 'Hubid',
			'id' => 'ID',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('data_set_name',$this->data_set_name,true);
		$criteria->compare('abbreviation',$this->abbreviation,true);
		$criteria->compare('data_source',$this->data_source,true);
		$criteria->compare('access_restricted',$this->access_restricted);
		$criteria->compare('public',$this->public);
		$criteria->compare('metadata_public',$this->metadata_public);
		$criteria->compare('data_public',$this->data_public);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('terms_of_use',$this->terms_of_use,true);
		$criteria->compare('software_platform',$this->software_platform,true);
		$criteria->compare('other_platform',$this->other_platform,true);
		$criteria->compare('overall_quality',$this->overall_quality,true);
		$criteria->compare('overall_accuracy',$this->overall_accuracy,true);
		$criteria->compare('overall_completeness',$this->overall_completeness,true);
		$criteria->compare('matchability',$this->matchability,true);
		$criteria->compare('periodicity',$this->periodicity,true);
		$criteria->compare('granularity',$this->granularity,true);
		$criteria->compare('first_received',$this->first_received,true);
		$criteria->compare('most_recent_update',$this->most_recent_update,true);
		$criteria->compare('initial_import_est_hours',$this->initial_import_est_hours);
		$criteria->compare('initial_import_comments',$this->initial_import_comments,true);
		$criteria->compare('routine_import_est_hours',$this->routine_import_est_hours);
		$criteria->compare('routine_import_comments',$this->routine_import_comments,true);
		$criteria->compare('data_quality_score',$this->data_quality_score);
		$criteria->compare('importance_score',$this->importance_score);
		$criteria->compare('difficulty_score',$this->difficulty_score);
		$criteria->compare('cost_score',$this->cost_score);
		$criteria->compare('data_cost_est',$this->data_cost_est);
		$criteria->compare('data_cost_timeperiod',$this->data_cost_timeperiod,true);
		$criteria->compare('data_cost_comments',$this->data_cost_comments,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_fax',$this->contact_fax,true);
		$criteria->compare('contact_address',$this->contact_address,true);
		$criteria->compare('contact_address2',$this->contact_address2,true);
		$criteria->compare('contact_address3',$this->contact_address3,true);
		$criteria->compare('contact_city',$this->contact_city,true);
		$criteria->compare('contact_state',$this->contact_state,true);
		$criteria->compare('contact_zip',$this->contact_zip,true);
		$criteria->compare('url1',$this->url1,true);
		$criteria->compare('url2',$this->url2,true);
		$criteria->compare('url3',$this->url3,true);
		$criteria->compare('internal_location',$this->internal_location,true);
		$criteria->compare('transfer_method',$this->transfer_method,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('creator',$this->creator,true);
		$criteria->compare('update_user',$this->update_user,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('views',$this->views);
		$criteria->compare('business_owner',$this->business_owner,true);
		$criteria->compare('contact_information',$this->contact_information,true);
		$criteria->compare('exclude',$this->exclude);
		$criteria->compare('delete_row',$this->delete_row);
		$criteria->compare('import_flag',$this->import_flag,true);
		$criteria->compare('database_name',$this->database_name,true);
		$criteria->compare('hubid',$this->hubid,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataSet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
