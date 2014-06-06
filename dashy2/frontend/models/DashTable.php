<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dash_table".
 *
 * @property string $name
 * @property string $descrip
 * @property string $db
 * @property string $hubid
 * @property string $date_created
 * @property string $creator
 * @property string $last_updated
 * @property string $update_user
 * @property boolean $exclude
 * @property boolean $delete_row
 * @property string $comments
 * @property string $id
 *
 * @property DashDatabase $db0
 */
class DashTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dash_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['name'], 'string', 'max' => 30],
            [['descrip'], 'string', 'max' => 400],
            [['db'], 'string', 'max' => 14],
            [['hubid'], 'string', 'max' => 10],
            [['creator', 'update_user'], 'string', 'max' => 20],
            [['comments'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'descrip' => Yii::t('app', 'Descrip'),
            'db' => Yii::t('app', 'Db'),
            'hubid' => Yii::t('app', 'Hubid'),
            'date_created' => Yii::t('app', 'Date Created'),
            'creator' => Yii::t('app', 'Creator'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'update_user' => Yii::t('app', 'Update User'),
            'exclude' => Yii::t('app', 'Exclude'),
            'delete_row' => Yii::t('app', 'Delete Row'),
            'comments' => Yii::t('app', 'Comments'),
            'id' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDb0()
    {
        return $this->hasOne(DashDatabase::className(), ['abbrev' => 'db']);
    }
}
