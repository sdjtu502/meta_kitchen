<?php

/**
 * This is the model class for table "databases".
 *
 * The followings are the available columns in table 'databases':
 * @property integer $Database_ID
 * @property string $Database_Name
 * @property string $Description
 * @property string $Business_Owner
 * @property string $Contact_Information
 * @property string $Data_Period
 * @property string $Software_Platform
 * @property string $General_Accuracy
 * @property string $Comments
 * @property integer $Public
 * @property integer $Creator
 * @property integer $Views
 * @property string $Date_Created
 * @property string $Last_Updated
 *
 * The followings are the available model relations:
 * @property DatabaseBusinessFunctions[] $databaseBusinessFunctions
 * @property DatabasesTables $database
 * @property DatabasesRevisions[] $databasesRevisions
 * @property DatabasesTables[] $databasesTables
 * @property TablesRevisions[] $tablesRevisions
 */
class Databases extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'databases';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Database_Name, Description, Business_Owner, Contact_Information, Data_Period, Software_Platform, General_Accuracy, Comments, Creator', 'required'),
			array('Public, Creator, Views', 'numerical', 'integerOnly'=>true),
			array('Database_Name, Business_Owner', 'length', 'max'=>100),
			array('Description', 'length', 'max'=>8000),
			array('Contact_Information, Data_Period, Software_Platform, General_Accuracy', 'length', 'max'=>1000),
			array('Comments', 'length', 'max'=>2000),
			array('Date_Created, Last_Updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Database_ID, Database_Name, Description, Business_Owner, Contact_Information, Data_Period, Software_Platform, General_Accuracy, Comments, Public, Creator, Views, Date_Created, Last_Updated', 'safe', 'on'=>'search'),
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
			'databaseBusinessFunctions' => array(self::HAS_MANY, 'DatabaseBusinessFunctions', 'Database_ID'),
			'database' => array(self::BELONGS_TO, 'DatabasesTables', 'Database_ID'),
			'databasesRevisions' => array(self::HAS_MANY, 'DatabasesRevisions', 'Database_ID'),
			'databasesTables' => array(self::HAS_MANY, 'DatabasesTables', 'Database_ID'),
			'tablesRevisions' => array(self::HAS_MANY, 'TablesRevisions', 'Database_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Database_ID' => 'Database',
			'Database_Name' => 'Database Name',
			'Description' => 'Description',
			'Business_Owner' => 'Business Owner',
			'Contact_Information' => 'Contact Information',
			'Data_Period' => 'Data Period',
			'Software_Platform' => 'Software Platform',
			'General_Accuracy' => 'General Accuracy',
			'Comments' => 'Comments',
			'Public' => 'Public',
			'Creator' => 'Creator',
			'Views' => 'Views',
			'Date_Created' => 'Date Created',
			'Last_Updated' => 'Last Updated',
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

		$criteria->compare('Database_ID',$this->Database_ID);
		$criteria->compare('Database_Name',$this->Database_Name,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Business_Owner',$this->Business_Owner,true);
		$criteria->compare('Contact_Information',$this->Contact_Information,true);
		$criteria->compare('Data_Period',$this->Data_Period,true);
		$criteria->compare('Software_Platform',$this->Software_Platform,true);
		$criteria->compare('General_Accuracy',$this->General_Accuracy,true);
		$criteria->compare('Comments',$this->Comments,true);
		$criteria->compare('Public',$this->Public);
		$criteria->compare('Creator',$this->Creator);
		$criteria->compare('Views',$this->Views);
		$criteria->compare('Date_Created',$this->Date_Created,true);
		$criteria->compare('Last_Updated',$this->Last_Updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Databases the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
