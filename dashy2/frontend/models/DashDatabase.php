<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dash_database".
 *
 * @property string $name
 * @property string $descrip
 * @property string $owner
 * @property string $contact_name
 * @property string $contact_email
 * @property string $contact_phone1
 * @property string $contact_fax
 * @property string $contact_address1
 * @property string $contact_address2
 * @property string $contact_address3
 * @property string $contact_city
 * @property string $contact_state
 * @property string $contact_zip
 * @property string $timeperiod
 * @property string $last_data_update
 * @property string $platform
 * @property string $quality
 * @property string $comments
 * @property string $datasource
 * @property string $steward
 * @property string $date_created
 * @property string $creator
 * @property string $last_updated
 * @property string $update_user
 * @property boolean $exclude
 * @property boolean $delete_row
 * @property string $abbrev
 * @property string $hubid
 * @property string $id
 *
 * @property DashOwner $owner0
 * @property DashTable[] $dashTables
 */
class DashDatabase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dash_database';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_data_update', 'date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['name', 'contact_email', 'platform', 'steward'], 'string', 'max' => 100],
            [['descrip', 'quality'], 'string', 'max' => 400],
            [['owner', 'contact_zip', 'datasource', 'abbrev', 'hubid'], 'string', 'max' => 10],
            [['contact_name', 'contact_address1', 'contact_address2', 'contact_address3'], 'string', 'max' => 40],
            [['contact_phone1', 'contact_fax', 'creator', 'update_user'], 'string', 'max' => 20],
            [['contact_city', 'timeperiod'], 'string', 'max' => 30],
            [['contact_state'], 'string', 'max' => 2],
            [['comments'], 'string', 'max' => 1000],
            [['abbrev'], 'unique']
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
            'owner' => Yii::t('app', 'Owner'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'contact_phone1' => Yii::t('app', 'Contact Phone1'),
            'contact_fax' => Yii::t('app', 'Contact Fax'),
            'contact_address1' => Yii::t('app', 'Contact Address1'),
            'contact_address2' => Yii::t('app', 'Contact Address2'),
            'contact_address3' => Yii::t('app', 'Contact Address3'),
            'contact_city' => Yii::t('app', 'Contact City'),
            'contact_state' => Yii::t('app', 'Contact State'),
            'contact_zip' => Yii::t('app', 'Contact Zip'),
            'timeperiod' => Yii::t('app', 'Timeperiod'),
            'last_data_update' => Yii::t('app', 'Last Data Update'),
            'platform' => Yii::t('app', 'Platform'),
            'quality' => Yii::t('app', 'Quality'),
            'comments' => Yii::t('app', 'Comments'),
            'datasource' => Yii::t('app', 'Datasource'),
            'steward' => Yii::t('app', 'Steward'),
            'date_created' => Yii::t('app', 'Date Created'),
            'creator' => Yii::t('app', 'Creator'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'update_user' => Yii::t('app', 'Update User'),
            'exclude' => Yii::t('app', 'Exclude'),
            'delete_row' => Yii::t('app', 'Delete Row'),
            'abbrev' => Yii::t('app', 'Abbrev'),
            'hubid' => Yii::t('app', 'Hubid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(DashOwner::className(), ['abbrev' => 'owner']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDashTables()
    {
        return $this->hasMany(DashTable::className(), ['db' => 'abbrev']);
    }
}
