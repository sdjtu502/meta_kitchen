<?php

namespace frontend\models;

use Yii;
use frontend\models\DataReceipt;   //GMS CUSTOM

/**
 * This is the model class for table "outbound_data_request".
 *
 * @property string $request_date
 * @property string $data_requested
 * @property string $category
 * @property string $subcategory
 * @property string $requester
 * @property string $requester_org
 * @property string $requester_email
 * @property string $requester_phone
 * @property string $provider_org
 * @property string $provider_name
 * @property string $provider_email
 * @property string $provider_phone
 * @property string $need_by_date
 * @property string $description
 * @property string $purpose
 * @property boolean $data_made_public
 * @property string $data_sharing_agrmnt_status
 * @property string $status
 * @property string $status_notes
 * @property string $last_follow_up
 * @property string $receipt_date
 * @property string $verified_by
 * @property string $verified_date
 * @property string $verification_notes
 * @property string $re_request_date
 * @property string $data_set_abbrev
 * @property integer $data_set
 * @property string $data_source_abbrev
 * @property integer $data_source
 * @property string $comments
 * @property string $date_created
 * @property string $creator
 * @property string $last_updated
 * @property string $update_user
 * @property string $rowsource
 * @property string $hubid
 * @property string $orgid
 * @property string $projid
 * @property integer $id
 */
class OutboundDataRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outbound_data_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_date', 'need_by_date', 'receipt_date', 'verified_date', 're_request_date', 'date_created', 'last_updated'], 'safe'],
            [['data_made_public'], 'boolean'],
            [['data_set', 'data_source'], 'integer'],
            [['data_requested', 'provider_org'], 'string', 'max' => 100],
            [['category', 'subcategory', 'requester', 'requester_org', 'requester_email'], 'string', 'max' => 50],
            [['requester_phone', 'provider_name', 'status', 'last_follow_up', 'verified_by', 'data_set_abbrev', 'data_source_abbrev', 'creator', 'update_user'], 'string', 'max' => 20],
            [['provider_email'], 'string', 'max' => 60],
            [['provider_phone'], 'string', 'max' => 16],
            [['description', 'purpose', 'data_sharing_agrmnt_status', 'status_notes'], 'string', 'max' => 1000],
            [['verification_notes'], 'string', 'max' => 400],
            [['comments'], 'string', 'max' => 500],
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
            'request_date' => Yii::t('app', 'Request Date'),
            'data_requested' => Yii::t('app', 'Data Requested'),
            'category' => Yii::t('app', 'Category'),
            'subcategory' => Yii::t('app', 'Subcategory'),
            'requester' => Yii::t('app', 'Requester'),
            'requester_org' => Yii::t('app', 'Requester Org'),
            'requester_email' => Yii::t('app', 'Requester Email'),
            'requester_phone' => Yii::t('app', 'Requester Phone'),
            'provider_org' => Yii::t('app', 'Provider Org'),
            'provider_name' => Yii::t('app', 'Provider Name'),
            'provider_email' => Yii::t('app', 'Provider Email'),
            'provider_phone' => Yii::t('app', 'Provider Phone'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'description' => Yii::t('app', 'Description'),
            'purpose' => Yii::t('app', 'Purpose'),
            'data_made_public' => Yii::t('app', 'Data Made Public'),
            'data_sharing_agrmnt_status' => Yii::t('app', 'Data Sharing Agrmnt Status'),
            'status' => Yii::t('app', 'Status'),
            'status_notes' => Yii::t('app', 'Status Notes'),
            'last_follow_up' => Yii::t('app', 'Last Follow Up'),
            'receipt_date' => Yii::t('app', 'Receipt Date'),
            'verified_by' => Yii::t('app', 'Verified By'),
            'verified_date' => Yii::t('app', 'Verified Date'),
            'verification_notes' => Yii::t('app', 'Verification Notes'),
            're_request_date' => Yii::t('app', 'Re Request Date'),
            'data_set_abbrev' => Yii::t('app', 'Data Set Abbrev'),
            'data_set' => Yii::t('app', 'Data Set'),
            'data_source_abbrev' => Yii::t('app', 'Data Source Abbrev'),
            'data_source' => Yii::t('app', 'Data Source'),
            'comments' => Yii::t('app', 'Comments'),
            'date_created' => Yii::t('app', 'Date Created'),
            'creator' => Yii::t('app', 'Creator'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'update_user' => Yii::t('app', 'Update User'),
            'rowsource' => Yii::t('app', 'Rowsource'),
            'hubid' => Yii::t('app', 'Hubid'),
            'orgid' => Yii::t('app', 'Orgid'),
            'projid' => Yii::t('app', 'Projid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }

	//GMS CUSTOM
	/* public function getDataReceipts()
	{
		//return $this->hasMany('DataReceipt', ['data_set_abbrev' => 'data_set_abbrev']);
		$child = $this->hasMany(DataReceipt::className(), ['data_set_abbrev' => 'data_set_abbrev']);
        echo "<br><br>Type in function: " . gettype($child) . "<br>";
		echo "<br><br><font face=arial size=3 color=darkblue>" . print_r($child) . "<br>";
		//echo "<br><br>" . print_r($child->_) . "<br>";
		echo "</font>";
		
		return $child;
	} */
    public function getDataReceipts()
	{
		//$datareceipts = DataReceipt::find()->select(['data_received', 'export_date'])->with('OutboundDataRequests')->all();
        return $this->hasMany(DataReceipt::className(), ['data_set_abbrev' => 'data_set_abbrev']);
	}
}
