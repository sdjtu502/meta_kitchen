<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Datadict;

/**
 * DatadictSearch represents the model behind the search form about `frontend\models\Datadict`.
 */
class DatadictSearch extends Datadict
{
    public function rules()
    {
        return [
            [['datadict_name', 'time_period', 'data_set_abbrev', 'data_set', 'etl_stage', 'dict_file_name', 'dict_file_location', 'dict_file_type', 'data_file_name', 'data_file_location', 'data_file_type', 'datadict_types', 'comments', 'date_created', 'creator', 'last_updated', 'update_user', 'rowsource', 'hubid', 'orgid', 'projid'], 'safe'],
            [['exclude', 'delete_row'], 'boolean'],
            [['id'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Datadict::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'datadict_name', $this->datadict_name])
            ->andFilterWhere(['like', 'time_period', $this->time_period])
            ->andFilterWhere(['like', 'data_set_abbrev', $this->data_set_abbrev])
            ->andFilterWhere(['like', 'data_set', $this->data_set])
            ->andFilterWhere(['like', 'etl_stage', $this->etl_stage])
            ->andFilterWhere(['like', 'dict_file_name', $this->dict_file_name])
            ->andFilterWhere(['like', 'dict_file_location', $this->dict_file_location])
            ->andFilterWhere(['like', 'dict_file_type', $this->dict_file_type])
            ->andFilterWhere(['like', 'data_file_name', $this->data_file_name])
            ->andFilterWhere(['like', 'data_file_location', $this->data_file_location])
            ->andFilterWhere(['like', 'data_file_type', $this->data_file_type])
            ->andFilterWhere(['like', 'datadict_types', $this->datadict_types])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'rowsource', $this->rowsource])
            ->andFilterWhere(['like', 'hubid', $this->hubid])
            ->andFilterWhere(['like', 'orgid', $this->orgid])
            ->andFilterWhere(['like', 'projid', $this->projid]);

        return $dataProvider;
    }
}
