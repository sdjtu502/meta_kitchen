<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DatadictRowSearch $searchModel
 */

$this->title = Yii::t('app', 'Datadict Rows');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadictrow-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Datadict Row',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'column_name',
            'start_pos',
            'width',
            'data_format',
            'unique_id_yn',
            // 'description',
            // 'comments',
            // 'rownum',
            // 'bigmatch_type',
            // 'matchfield_yn',
            // 'in_match_result',
            // 'load_from_function',
            // 'function_to_load_from',
            'datadict_id',
			//'field_reference',
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
