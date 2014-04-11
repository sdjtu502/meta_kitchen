<?php

/**
 * This is the model class for table "data_request".
 *
 * The followings are the available columns in table 'data_request':
 * @property string $request_date
 * @property string $data_requested
 * @property string $requester
 * @property string $requester_org
 * @property string $requester_email
 * @property string $requester_phone
 * @property string $need_by_date
 * @property integer $data_made_public
 * @property string $descrip
 * @property string $purpose
 * @property string $sources
 * @property integer $difficulty_score
 * @property integer $importance_score
 * @property integer $cost_score
 * @property string $status
 * @property string $status_notes
 * @property string $comments
 * @property string $date_created
 * @property string $creator
 * @property string $last_updated
 * @property string $update_user
 * @property string $hubid
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property DataRequestCommunication[] $dataRequestCommunications
 * @property DataRequestDocument[] $dataRequestDocuments
 * @property DataSetXRequest[] $dataSetXRequests
 */
class DataRequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_made_public, difficulty_score, importance_score, cost_score', 'numerical', 'integerOnly'=>true),
			array('data_requested, requester, requester_org, requester_email', 'length', 'max'=>50),
			array('requester_phone, creator, update_user', 'length', 'max'=>20),
			array('descrip, purpose, sources, status_notes', 'length', 'max'=>1000),
			array('status', 'length', 'max'=>30),
			array('comments', 'length', 'max'=>500),
			array('hubid', 'length', 'max'=>10),
			array('request_date, need_by_date, date_created, last_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('request_date, data_requested, requester, requester_org, requester_email, requester_phone, need_by_date, data_made_public, descrip, purpose, sources, difficulty_score, importance_score, cost_score, status, status_notes, comments, date_created, creator, last_updated, update_user, hubid, id', 'safe', 'on'=>'search'),
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
			'dataRequestCommunications' => array(self::HAS_MANY, 'DataRequestCommunication', 'request_id'),
			'dataRequestDocuments' => array(self::HAS_MANY, 'DataRequestDocument', 'request_id'),
			'dataSetXRequests' => array(self::HAS_MANY, 'DataSetXRequest', 'request_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'request_date' => 'Request Date',
			'data_requested' => 'Data Requested',
			'requester' => 'Requester',
			'requester_org' => 'Requester Org',
			'requester_email' => 'Requester Email',
			'requester_phone' => 'Requester Phone',
			'need_by_date' => 'Need By Date',
			'data_made_public' => 'Data Made Public',
			'descrip' => 'Descrip',
			'purpose' => 'Purpose',
			'sources' => 'Sources',
			'difficulty_score' => 'Difficulty Score',
			'importance_score' => 'Importance Score',
			'cost_score' => 'Cost Score',
			'status' => 'Status',
			'status_notes' => 'Status Notes',
			'comments' => 'Comments',
			'date_created' => 'Date Created',
			'creator' => 'Creator',
			'last_updated' => 'Last Updated',
			'update_user' => 'Update User',
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

		$criteria->compare('request_date',$this->request_date,true);
		$criteria->compare('data_requested',$this->data_requested,true);
		$criteria->compare('requester',$this->requester,true);
		$criteria->compare('requester_org',$this->requester_org,true);
		$criteria->compare('requester_email',$this->requester_email,true);
		$criteria->compare('requester_phone',$this->requester_phone,true);
		$criteria->compare('need_by_date',$this->need_by_date,true);
		$criteria->compare('data_made_public',$this->data_made_public);
		$criteria->compare('descrip',$this->descrip,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('sources',$this->sources,true);
		$criteria->compare('difficulty_score',$this->difficulty_score);
		$criteria->compare('importance_score',$this->importance_score);
		$criteria->compare('cost_score',$this->cost_score);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('status_notes',$this->status_notes,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('creator',$this->creator,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('update_user',$this->update_user,true);
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
	 * @return DataRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
