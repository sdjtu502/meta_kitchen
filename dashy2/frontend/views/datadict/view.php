<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\Datadict $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadicts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadict-view">

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
            'datadict_name',
            'time_period',
			'data_set_abbrev',
			'data_set',
            'etl_stage',
            'dict_file_name',
            'dict_file_location',
            'dict_file_type',
            'data_file_name',
            'data_file_location',
            'data_file_type',
            'datadict_types',
            'comments',
            'date_created',
            'creator',
            'last_updated',
            'update_user',
            'exclude:boolean',
            'delete_row:boolean',
            'rowsource',
            'hubid',
            'orgid',
            'projid',
            'id',
        ],
    ]) ?>

</div>
