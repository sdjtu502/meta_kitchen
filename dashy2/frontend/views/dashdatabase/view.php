<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DashDatabase $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dash Databases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashdatabase-view">

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
            'name',
            'descrip',
            'owner',
            'contact_name',
            'contact_email:email',
            'contact_phone1',
            'contact_fax',
            'contact_address1',
            'contact_address2',
            'contact_address3',
            'contact_city',
            'contact_state',
            'contact_zip',
            'timeperiod',
            'last_data_update',
            'platform',
            'quality',
            'comments',
            'datasource',
            'steward',
            'date_created',
            'creator',
            'last_updated',
            'update_user',
            'exclude:boolean',
            'delete_row:boolean',
            'abbrev',
            'hubid',
            'id',
        ],
    ]) ?>

	<?=
	//GMS CUSTOM
	//var_dump(get_object_vars( $model->getDashTables() ));
	?>
</div>
