<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datadict".
 *
 * @property string $datadict_name
 * @property string $datadict_types
 * @property string $file_location
 * @property string $file_type
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
            [['file_location'], 'string', 'max' => 200],
            [['file_type', 'creator', 'update_user'], 'string', 'max' => 20],
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
            'datadict_types' => Yii::t('app', 'Datadict Types'),
            'file_location' => Yii::t('app', 'File Location'),
            'file_type' => Yii::t('app', 'File Type'),
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
