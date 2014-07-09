<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datadict".
 *
 * @property string $datadict_name
 * @property string $time_period
 * @property string $data_set_abbrev
 * @property string data_set
 * @property string $etl_stage
 * @property string $dict_file_name
 * @property string $dict_file_location
 * @property string $dict_file_type
 * @property string $data_file_name
 * @property string $data_file_location
 * @property string $data_file_type
 * @property string $datadict_types
 * @property string $comments
 * @property string $date_created
 * @property string $creator
 * @property string $last_updated
 * @property string $update_user
 * @property boolean $exclude
 * @property boolean $delete_row
 * @property string $rowsource
 * @property string $hubid
 * @property string $orgid
 * @property string $projid
 * @property string $id
 */
class Datadict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datadict';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['datadict_name', 'datadict_types'], 'string', 'max' => 50],
            [['time_period', 'data_set_abbrev', 'dict_file_type', 'data_file_type', 'creator', 'update_user'], 'string', 'max' => 20],
            [['etl_stage', 'dict_file_name', 'data_file_name'], 'string', 'max' => 100],
            [['dict_file_location', 'data_file_location'], 'string', 'max' => 300],
            [['comments'], 'string', 'max' => 1000],
            [['rowsource'], 'string', 'max' => 12],
            [['hubid', 'orgid', 'projid'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'datadict_name' => Yii::t('app', 'Datadict Name'),
            'time_period' => Yii::t('app', 'Time Period'),
			'data_set_abbrev' => Yii::t('app', 'Data Set Abbrev'),
			'data_set' => Yii::t('app', 'Data Set ID'),
            'etl_stage' => Yii::t('app', 'Etl Stage'),
            'dict_file_name' => Yii::t('app', 'Dict File Name'),
            'dict_file_location' => Yii::t('app', 'Dict File Location'),
            'dict_file_type' => Yii::t('app', 'Dict File Type'),
            'data_file_name' => Yii::t('app', 'Data File Name'),
            'data_file_location' => Yii::t('app', 'Data File Location'),
            'data_file_type' => Yii::t('app', 'Data File Type'),
            'datadict_types' => Yii::t('app', 'Datadict Types'),
            'comments' => Yii::t('app', 'Comments'),
            'date_created' => Yii::t('app', 'Date Created'),
            'creator' => Yii::t('app', 'Creator'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'update_user' => Yii::t('app', 'Update User'),
            'exclude' => Yii::t('app', 'Exclude'),
            'delete_row' => Yii::t('app', 'Delete Row'),
            'rowsource' => Yii::t('app', 'Rowsource'),
            'hubid' => Yii::t('app', 'Hubid'),
            'orgid' => Yii::t('app', 'Orgid'),
            'projid' => Yii::t('app', 'Projid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
