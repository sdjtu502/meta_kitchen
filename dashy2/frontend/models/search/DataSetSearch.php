<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataSet;

/**
 * DataSetSearch represents the model behind the search form about `frontend\models\DataSet`.
 */
class DataSetSearch extends DataSet
{
    public function rules()
    {
        return [
            [['data_set_name', 'abbreviation', 'data_source', 'description', 'terms_of_use', 'software_platform', 'other_platform', 'overall_quality', 'overall_accuracy', 'overall_completeness', 'matchability', 'periodicity', 'granularity', 'first_received', 'most_recent_update', 'initial_import_comments', 'routine_import_comments', 'data_cost_timeperiod', 'data_cost_comments', 'owner', 'contact_name', 'contact_email', 'contact_phone', 'contact_fax', 'contact_address', 'contact_address2', 'contact_address3', 'contact_city', 'contact_state', 'contact_zip', 'url1', 'url2', 'url3', 'internal_location', 'transfer_method', 'comments', 'creator', 'update_user', 'date_created', 'last_updated', 'business_owner', 'contact_information', 'import_flag', 'database_name', 'hubid'], 'safe'],
            [['access_restricted', 'public', 'metadata_public', 'data_public', 'exclude', 'delete_row'], 'boolean'],
            [['initial_import_est_hours', 'routine_import_est_hours', 'data_cost_est', 'views', 'id'], 'integer'],
            [['data_quality_score', 'importance_score', 'difficulty_score', 'cost_score'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = DataSet::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'access_restricted' => $this->access_restricted,
            'public' => $this->public,
            'metadata_public' => $this->metadata_public,
            'data_public' => $this->data_public,
            'first_received' => $this->first_received,
            'most_recent_update' => $this->most_recent_update,
            'initial_import_est_hours' => $this->initial_import_est_hours,
            'routine_import_est_hours' => $this->routine_import_est_hours,
            'data_quality_score' => $this->data_quality_score,
            'importance_score' => $this->importance_score,
            'difficulty_score' => $this->difficulty_score,
            'cost_score' => $this->cost_score,
            'data_cost_est' => $this->data_cost_est,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'views' => $this->views,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'data_set_name', $this->data_set_name])
            ->andFilterWhere(['like', 'abbreviation', $this->abbreviation])
            ->andFilterWhere(['like', 'data_source', $this->data_source])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'terms_of_use', $this->terms_of_use])
            ->andFilterWhere(['like', 'software_platform', $this->software_platform])
            ->andFilterWhere(['like', 'other_platform', $this->other_platform])
            ->andFilterWhere(['like', 'overall_quality', $this->overall_quality])
            ->andFilterWhere(['like', 'overall_accuracy', $this->overall_accuracy])
            ->andFilterWhere(['like', 'overall_completeness', $this->overall_completeness])
            ->andFilterWhere(['like', 'matchability', $this->matchability])
            ->andFilterWhere(['like', 'periodicity', $this->periodicity])
            ->andFilterWhere(['like', 'granularity', $this->granularity])
            ->andFilterWhere(['like', 'initial_import_comments', $this->initial_import_comments])
            ->andFilterWhere(['like', 'routine_import_comments', $this->routine_import_comments])
            ->andFilterWhere(['like', 'data_cost_timeperiod', $this->data_cost_timeperiod])
            ->andFilterWhere(['like', 'data_cost_comments', $this->data_cost_comments])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'contact_phone', $this->contact_phone])
            ->andFilterWhere(['like', 'contact_fax', $this->contact_fax])
            ->andFilterWhere(['like', 'contact_address', $this->contact_address])
            ->andFilterWhere(['like', 'contact_address2', $this->contact_address2])
            ->andFilterWhere(['like', 'contact_address3', $this->contact_address3])
            ->andFilterWhere(['like', 'contact_city', $this->contact_city])
            ->andFilterWhere(['like', 'contact_state', $this->contact_state])
            ->andFilterWhere(['like', 'contact_zip', $this->contact_zip])
            ->andFilterWhere(['like', 'url1', $this->url1])
            ->andFilterWhere(['like', 'url2', $this->url2])
            ->andFilterWhere(['like', 'url3', $this->url3])
            ->andFilterWhere(['like', 'internal_location', $this->internal_location])
            ->andFilterWhere(['like', 'transfer_method', $this->transfer_method])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'business_owner', $this->business_owner])
            ->andFilterWhere(['like', 'contact_information', $this->contact_information])
            ->andFilterWhere(['like', 'import_flag', $this->import_flag])
            ->andFilterWhere(['like', 'database_name', $this->database_name])
            ->andFilterWhere(['like', 'hubid', $this->hubid]);

        return $dataProvider;
    }
}
