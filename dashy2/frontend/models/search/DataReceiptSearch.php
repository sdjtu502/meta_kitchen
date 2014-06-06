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
            [['data_received', 'data_set_abbrev', 'data_source_abbrev', 'reason', 'file_format', 'file_format_other', 'person_sending', 'person_receiving', 'export_date', 'receipt_date', 'saved_to_loc', 'comments', 'date_created', 'creator', 'last_updated', 'update_user', 'rowsource', 'hubid', 'orgid', 'projid'], 'safe'],
            [['data_set', 'data_source', 'id'], 'integer'],
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
        $query = DataReceipt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'data_set' => $this->data_set,
            'data_source' => $this->data_source,
            'receipt_date' => $this->receipt_date,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'data_received', $this->data_received])
            ->andFilterWhere(['like', 'data_set_abbrev', $this->data_set_abbrev])
            ->andFilterWhere(['like', 'data_source_abbrev', $this->data_source_abbrev])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'file_format', $this->file_format])
            ->andFilterWhere(['like', 'file_format_other', $this->file_format_other])
            ->andFilterWhere(['like', 'person_sending', $this->person_sending])
            ->andFilterWhere(['like', 'person_receiving', $this->person_receiving])
            ->andFilterWhere(['like', 'export_date', $this->export_date])
            ->andFilterWhere(['like', 'saved_to_loc', $this->saved_to_loc])
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
