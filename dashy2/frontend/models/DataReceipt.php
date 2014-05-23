<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_receipt".
 *
 * @property string $data_source
 * @property string $data_set
 * @property string $db
 * @property string $reason
 * @property string $comments
 * @property string $file_format
 * @property string $file_format_other
 * @property string $person_sending
 * @property string $org_sending
 * @property string $person_receiving
 * @property string $saved_to_loc
 * @property string $export_date
 * @property string $rcv_date
 * @property integer $id
 */
class DataReceipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_receipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['export_date', 'rcv_date'], 'safe'],
            [['data_source', 'data_set', 'db', 'reason', 'file_format'], 'string', 'max' => 10],
            [['comments'], 'string', 'max' => 1000],
            [['file_format_other', 'org_sending'], 'string', 'max' => 80],
            [['person_sending', 'person_receiving'], 'string', 'max' => 40],
            [['saved_to_loc'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'data_source' => Yii::t('app', 'Data Source'),
            'data_set' => Yii::t('app', 'Data Set'),
            'db' => Yii::t('app', 'Db'),
            'reason' => Yii::t('app', 'Reason'),
            'comments' => Yii::t('app', 'Comments'),
            'file_format' => Yii::t('app', 'File Format'),
            'file_format_other' => Yii::t('app', 'File Format Other'),
            'person_sending' => Yii::t('app', 'Person Sending'),
            'org_sending' => Yii::t('app', 'Org Sending'),
            'person_receiving' => Yii::t('app', 'Person Receiving'),
            'saved_to_loc' => Yii::t('app', 'Saved To Loc'),
            'export_date' => Yii::t('app', 'Export Date'),
            'rcv_date' => Yii::t('app', 'Rcv Date'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
