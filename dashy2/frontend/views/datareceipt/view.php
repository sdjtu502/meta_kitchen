<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataReceipt $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datareceipt-view">

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
            'data_received',
            'data_set_abbrev',
            'data_set',
            'data_source_abbrev',
            'data_source',
            'reason',
            'file_format',
            'file_format_other',
            'person_sending',
            'person_receiving',
            'export_date',
            'receipt_date',
            'saved_to_loc',
            'detail_url',
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
