<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSet $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Sets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'data_set_name',
            'abbreviation',
            'data_source',
            'access_restricted:boolean',
            'public:boolean',
            'metadata_public:boolean',
            'data_public:boolean',
            'description',
            'terms_of_use',
            'software_platform',
            'other_platform',
            'overall_quality',
            'overall_accuracy',
            'overall_completeness',
            'matchability',
            'periodicity',
            'granularity',
            'first_received',
            'most_recent_update',
            'initial_import_est_hours',
            'initial_import_comments',
            'routine_import_est_hours',
            'routine_import_comments',
            'data_quality_score',
            'importance_score',
            'difficulty_score',
            'cost_score',
            'data_cost_est',
            'data_cost_timeperiod',
            'data_cost_comments',
            'owner',
            'contact_name',
            'contact_email:email',
            'contact_phone',
            'contact_fax',
            'contact_address',
            'contact_address2',
            'contact_address3',
            'contact_city',
            'contact_state',
            'contact_zip',
            'url1:url',
            'url2:url',
            'url3:url',
            'internal_location',
            'transfer_method',
            'comments',
            'creator',
            'update_user',
            'date_created',
            'last_updated',
            'views',
            'business_owner',
            'contact_information',
            'exclude:boolean',
            'delete_row:boolean',
            'import_flag',
            'database_name',
            'hubid',
            'id',
        ],
    ]) ?>

</div>
