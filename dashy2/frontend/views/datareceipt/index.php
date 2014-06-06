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
<div class="datareceipt-index">

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

            'data_received',
            'data_set_abbrev',
            'data_set',
            'data_source_abbrev',
            'data_source',
            // 'reason',
            // 'file_format',
            // 'file_format_other',
            // 'person_sending',
            // 'person_receiving',
            // 'export_date',
            // 'receipt_date',
            // 'saved_to_loc',
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
