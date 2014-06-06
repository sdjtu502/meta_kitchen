<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSource $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Sources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datasource-view">

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
            'data_source_abbrev',
            'data_source_name',
            'data_source_url:url',
            'description',
            'restricted:boolean',
            'terms_of_use',
            'nmfldfordatsrc',
            'contracts',
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
            'comments',
            'id',
        ],
    ]) ?>

</div>
