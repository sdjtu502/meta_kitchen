<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\search\DashDatabaseSearch $searchModel
 */

$this->title = Yii::t('app', 'Dash Databases');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashdatabase-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Dash Database',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'descrip',
            'owner',
            'contact_name',
            'contact_email:email',
            // 'contact_phone1',
            // 'contact_fax',
            // 'contact_address1',
            // 'contact_address2',
            // 'contact_address3',
            // 'contact_city',
            // 'contact_state',
            // 'contact_zip',
            // 'timeperiod',
            // 'last_data_update',
            // 'platform',
            // 'quality',
            // 'comments',
            // 'datasource',
            // 'steward',
            // 'date_created',
            // 'creator',
            // 'last_updated',
            // 'update_user',
            // 'exclude:boolean',
            // 'delete_row:boolean',
            // 'abbrev',
            // 'hubid',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
