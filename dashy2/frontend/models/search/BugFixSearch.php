<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bugfix;

/**
 * BugFixSearch represents the model behind the search form about `frontend\models\Bugfix`.
 */
class BugFixSearch extends Bugfix
{
    public function rules()
    {
        return [
            [['requester', 'site'], 'safe'],
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
        $query = Bugfix::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'requester', $this->requester])
            ->andFilterWhere(['like', 'site', $this->site]);

        return $dataProvider;
    }
}
