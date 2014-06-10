<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\OutboundDataRequestSearch $searchModel
 */

$this->title = Yii::t('app', 'Outbound Data Requests');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbounddatarequest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Outbound Data Request',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'data_source_abbrev',
            'data_requested',
            'request_date',
            'requester',
            // 'requester_org',
            // 'requester_email:email',
            // 'requester_phone',
            // 'provider_org',
            // 'provider_name',
            // 'provider_email:email',
            // 'provider_phone',
            // 'need_by_date',
            // 'description',
            // 'purpose',
            // 'data_made_public:boolean',
            // 'data_sharing_agrmnt_status',
            'status',
            //'status_notes',
            'last_follow_up',
            'receipt_date',
            // 'verified_by',
            // 'verified_date',
            'verification_notes',
            're_request_date',
            'category',
            'subcategory',
            // 'data_set_abbrev',
            // 'data_set',
            // 'data_source',
            // 'comments',
            // 'date_created',
            // 'creator',
            // 'last_updated',
            // 'update_user',
            // 'rowsource',
            // 'hubid',
            // 'orgid',
            // 'projid',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
