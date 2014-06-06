<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DataSetSearch $searchModel
 */

$this->title = Yii::t('app', 'Data Sets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Set',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'data_set_name',
            'data_set_abbrev',
            'data_source',
            'data_source_name',
            'data_source_abbrev',
            // 'access_restricted:boolean',
            // 'public:boolean',
            // 'metadata_public:boolean',
            // 'data_public:boolean',
            // 'description',
            // 'terms_of_use',
            // 'software_platform',
            // 'other_platform',
            // 'overall_quality',
            // 'overall_accuracy',
            // 'overall_completeness',
            // 'matchability',
            // 'periodicity',
            // 'granularity',
            // 'first_received',
            // 'most_recent_update',
            // 'initial_import_est_hours',
            // 'initial_import_comments',
            // 'routine_import_est_hours',
            // 'routine_import_comments',
            // 'data_quality_score',
            // 'importance_score',
            // 'difficulty_score',
            // 'cost_score',
            // 'data_cost_est',
            // 'data_cost_timeperiod',
            // 'data_cost_comments',
            // 'owner',
            // 'contact_name',
            // 'contact_email:email',
            // 'contact_phone',
            // 'contact_fax',
            // 'contact_address',
            // 'contact_address2',
            // 'contact_address3',
            // 'contact_city',
            // 'contact_state',
            // 'contact_zip',
            // 'url1:url',
            // 'url2:url',
            // 'url3:url',
            // 'internal_location',
            // 'transfer_method',
            // 'comments',
            // 'creator',
            // 'update_user',
            // 'date_created',
            // 'last_updated',
            // 'views',
            // 'business_owner',
            // 'contact_information',
            // 'exclude:boolean',
            // 'delete_row:boolean',
            // 'import_flag',
            // 'database_name',
            // 'rowsource',
            // 'hubid',
            // 'orgid',
            // 'projid',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
