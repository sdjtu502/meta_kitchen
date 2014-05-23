<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DataReceiptSearch $searchModel
 */

$this->title = Yii::t('app', 'Data Receipts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-receipt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Data Receipt',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'data_source',
            'data_set',
            'db',
            'reason',
            'comments',
            // 'file_format',
            // 'file_format_other',
            // 'person_sending',
            // 'org_sending',
            // 'person_receiving',
            // 'saved_to_loc',
            // 'export_date',
            // 'rcv_date',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
