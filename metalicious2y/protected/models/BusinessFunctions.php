<?php

/**
 * This is the model class for table "business_functions".
 *
 * The followings are the available columns in table 'business_functions':
 * @property integer $Business_Function_ID
 * @property string $Business_Function_Name
 * @property string $Business_Function_Description
 *
 * The followings are the available model relations:
 * @property DatabaseBusinessFunctions[] $databaseBusinessFunctions
 */
class BusinessFunctions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'business_functions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Business_Function_Name', 'required'),
			array('Business_Function_Name', 'length', 'max'=>100),
			array('Business_Function_Description', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Business_Function_ID, Business_Function_Name, Business_Function_Description', 'safe', 'on'=>'search'),
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
			'databaseBusinessFunctions' => array(self::HAS_MANY, 'DatabaseBusinessFunctions', 'Business_Function_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Business_Function_ID' => 'Business Function',
			'Business_Function_Name' => 'Business Function Name',
			'Business_Function_Description' => 'Business Function Description',
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

		$criteria->compare('Business_Function_ID',$this->Business_Function_ID);
		$criteria->compare('Business_Function_Name',$this->Business_Function_Name,true);
		$criteria->compare('Business_Function_Description',$this->Business_Function_Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BusinessFunctions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
