<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DashDatabase;

/**
 * DashDatabaseSearch represents the model behind the search form about `frontend\models\DashDatabase`.
 */
class DashDatabaseSearch extends DashDatabase
{
    public function rules()
    {
        return [
            [['name', 'descrip', 'owner', 'contact_name', 'contact_email', 'contact_phone1', 'contact_fax', 'contact_address1', 'contact_address2', 'contact_address3', 'contact_city', 'contact_state', 'contact_zip', 'timeperiod', 'last_data_update', 'platform', 'quality', 'comments', 'datasource', 'steward', 'date_created', 'creator', 'last_updated', 'update_user', 'abbrev', 'hubid'], 'safe'],
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
        $query = DashDatabase::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'last_data_update' => $this->last_data_update,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'exclude' => $this->exclude,
            'delete_row' => $this->delete_row,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'descrip', $this->descrip])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'contact_phone1', $this->contact_phone1])
            ->andFilterWhere(['like', 'contact_fax', $this->contact_fax])
            ->andFilterWhere(['like', 'contact_address1', $this->contact_address1])
            ->andFilterWhere(['like', 'contact_address2', $this->contact_address2])
            ->andFilterWhere(['like', 'contact_address3', $this->contact_address3])
            ->andFilterWhere(['like', 'contact_city', $this->contact_city])
            ->andFilterWhere(['like', 'contact_state', $this->contact_state])
            ->andFilterWhere(['like', 'contact_zip', $this->contact_zip])
            ->andFilterWhere(['like', 'timeperiod', $this->timeperiod])
            ->andFilterWhere(['like', 'platform', $this->platform])
            ->andFilterWhere(['like', 'quality', $this->quality])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'datasource', $this->datasource])
            ->andFilterWhere(['like', 'steward', $this->steward])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'update_user', $this->update_user])
            ->andFilterWhere(['like', 'abbrev', $this->abbrev])
            ->andFilterWhere(['like', 'hubid', $this->hubid]);

        return $dataProvider;
    }
}
