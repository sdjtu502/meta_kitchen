<?php

namespace frontend\models;

use Yii;
//use frontend\models\OutboundDataRequest;
//use OutboundDataRequest;

/**
 * This is the model class for table "data_receipt".
 *
 * @property string $data_received
 * @property string $data_set_abbrev
 * @property integer $data_set
 * @property string $data_source_abbrev
 * @property integer $data_source
 * @property string $reason
 * @property string $file_format
 * @property string $file_format_other
 * @property string $person_sending
 * @property string $person_receiving
 * @property string $export_date
 * @property string $receipt_date
 * @property string $saved_to_loc
 * @property string $detail_url
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
            [['data_set', 'data_source'], 'integer'],
            [['receipt_date', 'date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['data_received'], 'string', 'max' => 100],
            [['data_set_abbrev', 'data_source_abbrev', 'export_date', 'creator', 'update_user'], 'string', 'max' => 20],
            [['reason', 'file_format', 'hubid', 'orgid', 'projid'], 'string', 'max' => 10],
            [['file_format_other'], 'string', 'max' => 80],
            [['person_sending', 'person_receiving'], 'string', 'max' => 40],
            [['saved_to_loc', 'detail_url'], 'string', 'max' => 200],
            [['comments'], 'string', 'max' => 1000],
            [['rowsource'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'data_received' => Yii::t('app', 'Data Received'),
            'data_set_abbrev' => Yii::t('app', 'Data Set Abbrev'),
            'data_set' => Yii::t('app', 'Data Set'),
            'data_source_abbrev' => Yii::t('app', 'Data Source Abbrev'),
            'data_source' => Yii::t('app', 'Data Source'),
            'reason' => Yii::t('app', 'Reason'),
            'file_format' => Yii::t('app', 'File Format'),
            'file_format_other' => Yii::t('app', 'File Format Other'),
            'person_sending' => Yii::t('app', 'Person Sending'),
            'person_receiving' => Yii::t('app', 'Person Receiving'),
            'export_date' => Yii::t('app', 'Export Date'),
            'receipt_date' => Yii::t('app', 'Receipt Date'),
            'saved_to_loc' => Yii::t('app', 'Saved To Loc'),
            'detail_url' => Yii::t('app', 'Source URL'),
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
	//GMS CUSTOM
	public function getOutboundDataRequests()
	{
		return $this->hasMany(OutboundDataRequest::className(), ['data_set_abbrev' => 'data_set_abbrev']);
	}	
}
