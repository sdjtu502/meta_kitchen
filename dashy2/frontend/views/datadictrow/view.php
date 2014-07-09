<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DatadictRow $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadict Rows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadictrow-view">

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
            'column_name',
            'start_pos',
            'width',
            'data_format',
            'unique_id_yn',
            'description',
            'comments',
            'rownum',
            'datadict_id',
            //'bigmatch_type',
            //'matchfield_yn',
            //'in_match_result',
            //'load_from_function',
            //'function_to_load_from',
            //'date_created',
            //'creator',
            //'last_updated',
            //'update_user',
            //'exclude:boolean',
            //'delete_row:boolean',
            //'rowsource',
            //'hubid',
            //'orgid',
            //'projid',
            'id',
        ],
    ]) ?>

</div>
