<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataReceipt;

/**
 * DataReceiptSearch represents the model behind the search form about `frontend\models\DataReceipt`.
 */
class DataReceiptSearch extends DataReceipt
{
    public function rules()
    {
        return [
            [['data_source', 'data_set', 'db', 'reason', 'comments', 'file_format', 'file_format_other', 'person_sending', 'org_sending', 'person_receiving', 'saved_to_loc', 'export_date', 'rcv_date'], 'safe'],
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
        $query = DataReceipt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'export_date' => $this->export_date,
            'rcv_date' => $this->rcv_date,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'data_source', $this->data_source])
            ->andFilterWhere(['like', 'data_set', $this->data_set])
            ->andFilterWhere(['like', 'db', $this->db])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'file_format', $this->file_format])
            ->andFilterWhere(['like', 'file_format_other', $this->file_format_other])
            ->andFilterWhere(['like', 'person_sending', $this->person_sending])
            ->andFilterWhere(['like', 'org_sending', $this->org_sending])
            ->andFilterWhere(['like', 'person_receiving', $this->person_receiving])
            ->andFilterWhere(['like', 'saved_to_loc', $this->saved_to_loc]);

        return $dataProvider;
    }
}
