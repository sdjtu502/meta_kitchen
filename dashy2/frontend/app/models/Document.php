<?php

namespace frontend\app\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property string $url
 * @property string $descrip
 * @property string $date_created
 * @property string $last_updated
 * @property string $doc_author
 * @property string $creator
 * @property string $update_user
 * @property boolean $exclude
 * @property boolean $delete_row
 * @property string $hubid
 * @property string $orgid
 * @property string $projid
 * @property integer $id
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['url', 'descrip'], 'string', 'max' => 200],
            [['doc_author'], 'string', 'max' => 30],
            [['creator', 'update_user', 'hubid', 'orgid', 'projid'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'url' => Yii::t('app', 'Url'),
            'descrip' => Yii::t('app', 'Descrip'),
            'date_created' => Yii::t('app', 'Date Created'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'doc_author' => Yii::t('app', 'Doc Author'),
            'creator' => Yii::t('app', 'Creator'),
            'update_user' => Yii::t('app', 'Update User'),
            'exclude' => Yii::t('app', 'Exclude'),
            'delete_row' => Yii::t('app', 'Delete Row'),
            'hubid' => Yii::t('app', 'Hubid'),
            'orgid' => Yii::t('app', 'Orgid'),
            'projid' => Yii::t('app', 'Projid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
