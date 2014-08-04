<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Datadict_row;

/**
 * Datadict_row_search represents the model behind the search form about `frontend\models\Datadict_row`.
 */
class Datadict_row_search extends Datadict_row
{
    public function rules()
    {
        return [
            [['column_name', 'start_pos', 'width', 'unique_id_yn', 'data_format', 'description', 'comments', 'bigmatch_type', 'matchfield_yn', 'in_match_result', 'load_from_function', 'function_to_load_from', 'date_created', 'creator', 'last_updated', 'update_user', 'rowsource', 'hubid', 'orgid', 'projid'], 'safe'],
            [['rownum', 'datadict_id', 'id'], 'integer'],
            [['exclude', 'delete_row'], 'boolean'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Datadict_row::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'rownum' => $this->rownum,
            'datadict_id' => $this->datadict_id,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'column_name', $this->column_name])
            ->andFilterWhere(['like', 'start_pos', $this->start_pos])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'unique_id_yn', $this->unique_id_yn])
            ->andFilterWhere(['like', 'data_format', $this->data_format])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'bigmatch_type', $this->bigmatch_type])
            ->andFilterWhere(['like', 'matchfield_yn', $this->matchfield_yn])
            ->andFilterWhere(['like', 'in_match_result', $this->in_match_result])
            ->andFilterWhere(['like', 'load_from_function', $this->load_from_function])
            ->andFilterWhere(['like', 'function_to_load_from', $this->function_to_load_from])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'rowsource', $this->rowsource])
            ->andFilterWhere(['like', 'hubid', $this->hubid])
            ->andFilterWhere(['like', 'orgid', $this->orgid])
            ->andFilterWhere(['like', 'projid', $this->projid]);

        return $dataProvider;
    }
}
