<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bugfix".
 *
 * @property string $requester
 * @property string $site
 * @property string $id
 */
class Bugfix extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bugfix';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requester', 'site'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'requester' => Yii::t('app', 'Requester'),
            'site' => Yii::t('app', 'Site'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
