<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_set".
 *
 * @property string $data_set_name
 * @property string $data_set_abbrev
 * @property integer $data_source
 * @property string $data_source_name
 * @property string $data_source_abbrev
 * @property boolean $access_restricted
 * @property boolean $public
 * @property boolean $metadata_public
 * @property boolean $data_public
 * @property string $description
 * @property string $terms_of_use
 * @property string $software_platform
 * @property string $other_platform
 * @property string $overall_quality
 * @property string $overall_accuracy
 * @property string $overall_completeness
 * @property string $matchability
 * @property string $periodicity
 * @property string $granularity
 * @property string $first_received
 * @property string $most_recent_update
 * @property integer $initial_import_est_hours
 * @property string $initial_import_comments
 * @property integer $routine_import_est_hours
 * @property string $routine_import_comments
 * @property double $data_quality_score
 * @property double $importance_score
 * @property double $difficulty_score
 * @property double $cost_score
 * @property integer $data_cost_est
 * @property string $data_cost_timeperiod
 * @property string $data_cost_comments
 * @property string $owner
 * @property string $contact_name
 * @property string $contact_email
 * @property string $contact_phone
 * @property string $contact_fax
 * @property string $contact_address
 * @property string $contact_address2
 * @property string $contact_address3
 * @property string $contact_city
 * @property string $contact_state
 * @property string $contact_zip
 * @property string $url1
 * @property string $url2
 * @property string $url3
 * @property string $internal_location
 * @property string $transfer_method
 * @property string $comments
 * @property string $creator
 * @property string $update_user
 * @property string $date_created
 * @property string $last_updated
 * @property integer $views
 * @property string $business_owner
 * @property string $contact_information
 * @property boolean $exclude
 * @property boolean $delete_row
 * @property string $import_flag
 * @property string $database_name
 * @property string $rowsource
 * @property string $hubid
 * @property string $orgid
 * @property string $projid
 * @property integer $id
 *
 * @property DataSetCommunication[] $dataSetCommunications
 * @property DataSetDocument[] $dataSetDocuments
 * @property DataSetXRequest[] $dataSetXRequests
 */
class DataSet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_set';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_source', 'initial_import_est_hours', 'routine_import_est_hours', 'data_cost_est', 'views'], 'integer'],
            [['access_restricted', 'public', 'metadata_public', 'data_public', 'exclude', 'delete_row'], 'boolean'],
            [['first_received', 'most_recent_update', 'date_created', 'last_updated'], 'safe'],
            [['data_quality_score', 'importance_score', 'difficulty_score', 'cost_score'], 'number'],
            [['data_set_name', 'data_source_name', 'matchability', 'periodicity', 'contact_email', 'transfer_method', 'business_owner', 'database_name'], 'string', 'max' => 100],
            [['data_set_abbrev', 'contact_phone', 'contact_fax', 'creator', 'update_user'], 'string', 'max' => 20],
            [['data_source_abbrev', 'rowsource'], 'string', 'max' => 12],
            [['description', 'initial_import_comments', 'routine_import_comments', 'data_cost_comments'], 'string', 'max' => 1000],
            [['terms_of_use', 'internal_location'], 'string', 'max' => 300],
            [['software_platform', 'other_platform', 'contact_city'], 'string', 'max' => 30],
            [['overall_quality', 'overall_accuracy', 'overall_completeness', 'contact_information'], 'string', 'max' => 600],
            [['granularity', 'contact_address2', 'contact_address3'], 'string', 'max' => 40],
            [['data_cost_timeperiod', 'hubid', 'orgid', 'projid'], 'string', 'max' => 10],
            [['owner', 'contact_name'], 'string', 'max' => 200],
            [['contact_address'], 'string', 'max' => 50],
            [['contact_state'], 'string', 'max' => 2],
            [['contact_zip'], 'string', 'max' => 11],
            [['url1', 'url2', 'url3'], 'string', 'max' => 500],
            [['comments'], 'string', 'max' => 4000],
            [['import_flag'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'data_set_name' => Yii::t('app', 'Data Set Name'),
            'data_set_abbrev' => Yii::t('app', 'Data Set Abbrev'),
            'data_source' => Yii::t('app', 'Data Source'),
            'data_source_name' => Yii::t('app', 'Data Source Name'),
            'data_source_abbrev' => Yii::t('app', 'Data Source Abbrev'),
            'access_restricted' => Yii::t('app', 'Access Restricted'),
            'public' => Yii::t('app', 'Public'),
            'metadata_public' => Yii::t('app', 'Metadata Public'),
            'data_public' => Yii::t('app', 'Data Public'),
            'description' => Yii::t('app', 'Description'),
            'terms_of_use' => Yii::t('app', 'Terms Of Use'),
            'software_platform' => Yii::t('app', 'Software Platform'),
            'other_platform' => Yii::t('app', 'Other Platform'),
            'overall_quality' => Yii::t('app', 'Overall Quality'),
            'overall_accuracy' => Yii::t('app', 'Overall Accuracy'),
            'overall_completeness' => Yii::t('app', 'Overall Completeness'),
            'matchability' => Yii::t('app', 'Matchability'),
            'periodicity' => Yii::t('app', 'Periodicity'),
            'granularity' => Yii::t('app', 'Granularity'),
            'first_received' => Yii::t('app', 'First Received'),
            'most_recent_update' => Yii::t('app', 'Most Recent Update'),
            'initial_import_est_hours' => Yii::t('app', 'Initial Import Est Hours'),
            'initial_import_comments' => Yii::t('app', 'Initial Import Comments'),
            'routine_import_est_hours' => Yii::t('app', 'Routine Import Est Hours'),
            'routine_import_comments' => Yii::t('app', 'Routine Import Comments'),
            'data_quality_score' => Yii::t('app', 'Data Quality Score'),
            'importance_score' => Yii::t('app', 'Importance Score'),
            'difficulty_score' => Yii::t('app', 'Difficulty Score'),
            'cost_score' => Yii::t('app', 'Cost Score'),
            'data_cost_est' => Yii::t('app', 'Data Cost Est'),
            'data_cost_timeperiod' => Yii::t('app', 'Data Cost Timeperiod'),
            'data_cost_comments' => Yii::t('app', 'Data Cost Comments'),
            'owner' => Yii::t('app', 'Owner'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'contact_phone' => Yii::t('app', 'Contact Phone'),
            'contact_fax' => Yii::t('app', 'Contact Fax'),
            'contact_address' => Yii::t('app', 'Contact Address'),
            'contact_address2' => Yii::t('app', 'Contact Address2'),
            'contact_address3' => Yii::t('app', 'Contact Address3'),
            'contact_city' => Yii::t('app', 'Contact City'),
            'contact_state' => Yii::t('app', 'Contact State'),
            'contact_zip' => Yii::t('app', 'Contact Zip'),
            'url1' => Yii::t('app', 'Url1'),
            'url2' => Yii::t('app', 'Url2'),
            'url3' => Yii::t('app', 'Url3'),
            'internal_location' => Yii::t('app', 'Internal Location'),
            'transfer_method' => Yii::t('app', 'Transfer Method'),
            'comments' => Yii::t('app', 'Comments'),
            'creator' => Yii::t('app', 'Creator'),
            'update_user' => Yii::t('app', 'Update User'),
            'date_created' => Yii::t('app', 'Date Created'),
            'last_updated' => Yii::t('app', 'Last Updated'),
            'views' => Yii::t('app', 'Views'),
            'business_owner' => Yii::t('app', 'Business Owner'),
            'contact_information' => Yii::t('app', 'Contact Information'),
            'exclude' => Yii::t('app', 'Exclude'),
            'delete_row' => Yii::t('app', 'Delete Row'),
            'import_flag' => Yii::t('app', 'Import Flag'),
            'database_name' => Yii::t('app', 'Database Name'),
            'rowsource' => Yii::t('app', 'Rowsource'),
            'hubid' => Yii::t('app', 'Hubid'),
            'orgid' => Yii::t('app', 'Orgid'),
            'projid' => Yii::t('app', 'Projid'),
            'id' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataSetCommunications()
    {
        return $this->hasMany(DataSetCommunication::className(), ['dataset_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataSetDocuments()
    {
        return $this->hasMany(DataSetDocument::className(), ['dataset_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataSetXRequests()
    {
        return $this->hasMany(DataSetXRequest::className(), ['dataset_id' => 'id']);
    }
}
