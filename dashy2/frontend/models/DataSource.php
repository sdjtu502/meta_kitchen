<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_source".
 *
 * @property string $data_source_abbrev
 * @property string $data_source_name
 * @property string $data_source_url
 * @property string $description
 * @property boolean $restricted
 * @property string $terms_of_use
 * @property string $nmfldfordatsrc
 * @property string $contracts
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
 * @property string $comments
 * @property string $id
 */
class DataSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_source';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_source_name'], 'required'],
            [['restricted', 'exclude', 'delete_row'], 'boolean'],
            [['nmfldfordatsrc'], 'integer'],
            [['date_created', 'last_updated'], 'safe'],
            [['data_source_abbrev', 'creator', 'update_user'], 'string', 'max' => 20],
            [['data_source_name'], 'string', 'max' => 250],
            [['data_source_url'], 'string', 'max' => 400],
            [['description'], 'string', 'max' => 800],
            [['terms_of_use'], 'string', 'max' => 500],
            [['contracts'], 'string', 'max' => 200],
            [['rowsource'], 'string', 'max' => 12],
            [['hubid', 'orgid', 'projid'], 'string', 'max' => 10],
            [['comments'], 'string', 'max' => 600]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'data_source_abbrev' => Yii::t('app', 'Data Source Abbrev'),
            'data_source_name' => Yii::t('app', 'Data Source Name'),
            'data_source_url' => Yii::t('app', 'Data Source Url'),
            'description' => Yii::t('app', 'Description'),
            'restricted' => Yii::t('app', 'Restricted'),
            'terms_of_use' => Yii::t('app', 'Terms Of Use'),
            'nmfldfordatsrc' => Yii::t('app', 'Nmfldfordatsrc'),
            'contracts' => Yii::t('app', 'Contracts'),
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
            'comments' => Yii::t('app', 'Comments'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
