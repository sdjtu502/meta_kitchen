<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "datadict_row".
 *
 * @property string $column_name
 * @property string $start_pos
 * @property string $width
 * @property string $unique_id_yn
 * @property string $data_format
 * @property string $description
 * @property string $comments
 * @property string $reference_field
 * @property integer $rownum
 * @property string $bigmatch_type
 * @property string $matchfield_yn
 * @property string $in_match_result
 * @property string $load_from_function
 * @property string $function_to_load_from
 * @property integer $datadict_id
 * @property string $datadict_name
 * @property integer $dataset
 * @property string $dataset_abbrev
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
class DatadictRow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datadict_row';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rownum', 'datadict_id', 'dataset'], 'integer'],
            [['date_created', 'last_updated'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['column_name', 'function_to_load_from', 'datadict_name'], 'string', 'max' => 50],
            [['start_pos', 'width'], 'string', 'max' => 4],
            [['unique_id_yn', 'matchfield_yn', 'in_match_result', 'load_from_function'], 'string', 'max' => 1],
            [['data_format', 'dataset_abbrev', 'creator', 'update_user'], 'string', 'max' => 20],
            [['description', 'comments'], 'string', 'max' => 1000],
            [['reference_field'], 'string', 'max' => 40],
            [['bigmatch_type'], 'string', 'max' => 6],
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
            'column_name' => Yii::t('app', 'Column Name'),
            'start_pos' => Yii::t('app', 'Start Pos'),
            'width' => Yii::t('app', 'Width'),
            'unique_id_yn' => Yii::t('app', 'Unique Id Yn'),
            'data_format' => Yii::t('app', 'Data Format'),
            'description' => Yii::t('app', 'Description'),
            'comments' => Yii::t('app', 'Comments'),
            'reference_field' => Yii::t('app', 'Reference Field'),
            'rownum' => Yii::t('app', 'Rownum'),
            'bigmatch_type' => Yii::t('app', 'Bigmatch Type'),
            'matchfield_yn' => Yii::t('app', 'Matchfield Yn'),
            'in_match_result' => Yii::t('app', 'In Match Result'),
            'load_from_function' => Yii::t('app', 'Load From Function'),
            'function_to_load_from' => Yii::t('app', 'Function To Load From'),
            'datadict_id' => Yii::t('app', 'Datadict ID'),
            'datadict_name' => Yii::t('app', 'Datadict Name'),
            'dataset' => Yii::t('app', 'Dataset'),
            'dataset_abbrev' => Yii::t('app', 'Dataset Abbrev'),
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
