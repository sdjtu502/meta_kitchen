<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DataSourceSearch $searchModel
 */

$this->title = Yii::t('app', 'Data Sources');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasource-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Source',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'data_source_abbrev',
            'data_source_name',
            'data_source_url:url',
            //'description',
            //'restricted:boolean',
            // 'terms_of_use',
            // 'nmfldfordatsrc',
            // 'contracts',
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
            // 'comments',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
