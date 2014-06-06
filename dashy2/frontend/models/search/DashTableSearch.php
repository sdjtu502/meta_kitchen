<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DashTable;

/**
 * DashTableSearch represents the model behind the search form about `frontend\models\DashTable`.
 */
class DashTableSearch extends DashTable
{
    public function rules()
    {
        return [
            [['name', 'descrip', 'db', 'hubid', 'date_created', 'creator', 'last_updated', 'update_user', 'comments'], 'safe'],
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
        $query = DashTable::find();

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

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'descrip', $this->descrip])
            ->andFilterWhere(['like', 'db', $this->db])
            ->andFilterWhere(['like', 'hubid', $this->hubid])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
