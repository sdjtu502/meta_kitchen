<?php

/**
 * This is the model class for table "Variables".
 *
 * The followings are the available columns in table 'Variables':
 * @property integer $Variable_ID
 * @property string $Variable_Name
 * @property string $Variable_Description
 * @property string $Variable_Type_Format
 * @property string $Variable_Length
 * @property string $Variable_Values
 * @property string $Variable_Example
 * @property string $Variable_Comments
 * @property string $Data_Portal
 * @property integer $Public
 * @property integer $Creator
 * @property integer $Views
 * @property string $Date_Created
 * @property string $Last_Updated
 * @property integer $Table_Id
 *
 * The followings are the available model relations:
 * @property TablesVariables[] $tablesVariables
 * @property VariablesRevisions[] $variablesRevisions
 */
class Variables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Variables';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Variable_Name, Variable_Description, Variable_Type_Format, Variable_Length, Variable_Values, Variable_Example, Variable_Comments, Creator', 'required'),
			array('Public, Creator, Views, Table_Id', 'numerical', 'integerOnly'=>true),
			array('Variable_Name, Variable_Type_Format, Variable_Length', 'length', 'max'=>100),
			array('Variable_Description, Variable_Example, Variable_Comments', 'length', 'max'=>1000),
			array('Variable_Values', 'length', 'max'=>3000),
			array('Data_Portal', 'length', 'max'=>1),
			array('Date_Created, Last_Updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Variable_ID, Variable_Name, Variable_Description, Variable_Type_Format, Variable_Length, Variable_Values, Variable_Example, Variable_Comments, Data_Portal, Public, Creator, Views, Date_Created, Last_Updated, Table_Id', 'safe', 'on'=>'search'),
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
			'tablesVariables' => array(self::HAS_MANY, 'TablesVariables', 'Variable_ID'),
			'variablesRevisions' => array(self::HAS_MANY, 'VariablesRevisions', 'Variable_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Variable_ID' => 'Variable',
			'Variable_Name' => 'Variable Name',
			'Variable_Description' => 'Variable Description',
			'Variable_Type_Format' => 'Variable Type Format',
			'Variable_Length' => 'Variable Length',
			'Variable_Values' => 'Variable Values',
			'Variable_Example' => 'Variable Example',
			'Variable_Comments' => 'Variable Comments',
			'Data_Portal' => 'Data Portal',
			'Public' => 'Public',
			'Creator' => 'Creator',
			'Views' => 'Views',
			'Date_Created' => 'Date Created',
			'Last_Updated' => 'Last Updated',
			'Table_Id' => 'Table',
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

		$criteria->compare('Variable_ID',$this->Variable_ID);
		$criteria->compare('Variable_Name',$this->Variable_Name,true);
		$criteria->compare('Variable_Description',$this->Variable_Description,true);
		$criteria->compare('Variable_Type_Format',$this->Variable_Type_Format,true);
		$criteria->compare('Variable_Length',$this->Variable_Length,true);
		$criteria->compare('Variable_Values',$this->Variable_Values,true);
		$criteria->compare('Variable_Example',$this->Variable_Example,true);
		$criteria->compare('Variable_Comments',$this->Variable_Comments,true);
		$criteria->compare('Data_Portal',$this->Data_Portal,true);
		$criteria->compare('Public',$this->Public);
		$criteria->compare('Creator',$this->Creator);
		$criteria->compare('Views',$this->Views);
		$criteria->compare('Date_Created',$this->Date_Created,true);
		$criteria->compare('Last_Updated',$this->Last_Updated,true);
		$criteria->compare('Table_Id',$this->Table_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Variables the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
