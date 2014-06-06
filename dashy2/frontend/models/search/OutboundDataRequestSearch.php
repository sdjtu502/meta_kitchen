<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OutboundDataRequest;

/**
 * OutboundDataRequestSearch represents the model behind the search form about `frontend\models\OutboundDataRequest`.
 */
class OutboundDataRequestSearch extends OutboundDataRequest
{
    public function rules()
    {
        return [
            [['request_date', 'data_requested', 'category', 'subcategory', 'requester', 'requester_org', 'requester_email', 'requester_phone', 'provider_org', 'provider_name', 'provider_email', 'provider_phone', 'need_by_date', 'description', 'purpose', 'data_sharing_agrmnt_status', 'status', 'status_notes', 'last_follow_up', 'receipt_date', 'verified_by', 'verified_date', 'verification_notes', 're_request_date', 'data_set_abbrev', 'data_source_abbrev', 'comments', 'date_created', 'creator', 'last_updated', 'update_user', 'rowsource', 'hubid', 'orgid', 'projid'], 'safe'],
            [['data_made_public'], 'boolean'],
            [['data_set', 'data_source', 'id'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OutboundDataRequest::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'request_date' => $this->request_date,
            'need_by_date' => $this->need_by_date,
            'data_made_public' => $this->data_made_public,
            'receipt_date' => $this->receipt_date,
            'verified_date' => $this->verified_date,
            're_request_date' => $this->re_request_date,
            'data_set' => $this->data_set,
            'data_source' => $this->data_source,
            'date_created' => $this->date_created,
            'last_updated' => $this->last_updated,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'data_requested', $this->data_requested])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'subcategory', $this->subcategory])
            ->andFilterWhere(['like', 'requester', $this->requester])
            ->andFilterWhere(['like', 'requester_org', $this->requester_org])
            ->andFilterWhere(['like', 'requester_email', $this->requester_email])
            ->andFilterWhere(['like', 'requester_phone', $this->requester_phone])
            ->andFilterWhere(['like', 'provider_org', $this->provider_org])
            ->andFilterWhere(['like', 'provider_name', $this->provider_name])
            ->andFilterWhere(['like', 'provider_email', $this->provider_email])
            ->andFilterWhere(['like', 'provider_phone', $this->provider_phone])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'data_sharing_agrmnt_status', $this->data_sharing_agrmnt_status])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'status_notes', $this->status_notes])
            ->andFilterWhere(['like', 'last_follow_up', $this->last_follow_up])
            ->andFilterWhere(['like', 'verified_by', $this->verified_by])
            ->andFilterWhere(['like', 'verification_notes', $this->verification_notes])
            ->andFilterWhere(['like', 'data_set_abbrev', $this->data_set_abbrev])
            ->andFilterWhere(['like', 'data_source_abbrev', $this->data_source_abbrev])
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
