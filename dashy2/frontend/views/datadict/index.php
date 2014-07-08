<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DatadictSearch $searchModel
 */

$this->title = Yii::t('app', 'Datadicts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadict-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Datadict',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'datadict_name',
            'time_period',
            'etl_stage',
            'dict_file_name',
            'dict_file_location',
            // 'dict_file_type',
            // 'data_file_name',
            // 'data_file_location',
            // 'data_file_type',
            // 'datadict_types',
            // 'comments',
            // 'date_created',
            // 'creator',
            // 'last_updated',
            // 'update_user',
            // 'exclude:boolean',
            // 'delete_row:boolean',
            // 'rowsource',
            // 'hubid',
            // 'orgid',
            // 'projid',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
