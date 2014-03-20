<?php

/**
 * This is the model class for table "tables".
 *
 * The followings are the available columns in table 'tables':
 * @property integer $Table_ID
 * @property string $Table_Name
 * @property string $Table_Description
 * @property string $Table_Comments
 * @property integer $Public
 * @property integer $Creator
 * @property integer $Views
 * @property string $Date_Created
 * @property string $Last_Updated
 *
 * The followings are the available model relations:
 * @property DatabasesTables[] $databasesTables
 * @property TablesRevisions[] $tablesRevisions
 * @property TablesVariables[] $tablesVariables
 * @property VariablesRevisions[] $variablesRevisions
 */
class Tables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tables';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Table_Name, Table_Description, Table_Comments, Creator', 'required'),
			array('Public, Creator, Views', 'numerical', 'integerOnly'=>true),
			array('Table_Name', 'length', 'max'=>100),
			array('Table_Description', 'length', 'max'=>8000),
			array('Table_Comments', 'length', 'max'=>2000),
			array('Date_Created, Last_Updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Table_ID, Table_Name, Table_Description, Table_Comments, Public, Creator, Views, Date_Created, Last_Updated', 'safe', 'on'=>'search'),
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
			'databasesTables' => array(self::HAS_MANY, 'DatabasesTables', 'Table_ID'),
			'tablesRevisions' => array(self::HAS_MANY, 'TablesRevisions', 'Table_ID'),
			'tablesVariables' => array(self::HAS_MANY, 'TablesVariables', 'Table_ID'),
			'variablesRevisions' => array(self::HAS_MANY, 'VariablesRevisions', 'Table_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Table_ID' => 'Table',
			'Table_Name' => 'Table Name',
			'Table_Description' => 'Table Description',
			'Table_Comments' => 'Table Comments',
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

		$criteria->compare('Table_ID',$this->Table_ID);
		$criteria->compare('Table_Name',$this->Table_Name,true);
		$criteria->compare('Table_Description',$this->Table_Description,true);
		$criteria->compare('Table_Comments',$this->Table_Comments,true);
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
	 * @return Tables the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
