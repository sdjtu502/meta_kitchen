<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataSource;

/**
 * DataSourceSearch represents the model behind the search form about `frontend\models\DataSource`.
 */
class DataSourceSearch extends DataSource
{
    public function rules()
    {
        return [
            [['data_source_abbrev', 'data_source_name', 'data_source_url', 'description', 'terms_of_use', 'contracts', 'date_created', 'creator', 'last_updated', 'update_user', 'rowsource', 'hubid', 'orgid', 'projid', 'comments'], 'safe'],
            [['restricted', 'exclude', 'delete_row'], 'boolean'],
            [['nmfldfordatsrc', 'id'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = DataSource::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'restricted' => $this->restricted,
            'nmfldfordatsrc' => $this->nmfldfordatsrc,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'data_source_abbrev', $this->data_source_abbrev])
            ->andFilterWhere(['like', 'data_source_name', $this->data_source_name])
            ->andFilterWhere(['like', 'data_source_url', $this->data_source_url])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'terms_of_use', $this->terms_of_use])
            ->andFilterWhere(['like', 'contracts', $this->contracts])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'rowsource', $this->rowsource])
            ->andFilterWhere(['like', 'hubid', $this->hubid])
            ->andFilterWhere(['like', 'orgid', $this->orgid])
            ->andFilterWhere(['like', 'projid', $this->projid])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
