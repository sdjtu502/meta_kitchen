<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;  //GMS CUSTOM

/**
 * @var yii\web\View $this
 * @var frontend\models\OutboundDataRequest $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outbound Data Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outbounddatarequest-view">

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
            'request_date',
            'data_requested',
            'category',
            'subcategory',
            'requester',
            'requester_org',
            'requester_email:email',
            'requester_phone',
            'provider_org',
            'provider_name',
            'provider_email:email',
            'provider_phone',
            'need_by_date',
            'description',
            'purpose',
            'data_made_public:boolean',
            'data_sharing_agrmnt_status',
            'status',
            'status_notes',
            'last_follow_up',
            'receipt_date',
            'verified_by',
            'verified_date',
            'verification_notes',
            're_request_date',
            'data_set_abbrev',
            'data_set',
            'data_source_abbrev',
            'data_source',
            'comments',
            'date_created',
            'creator',
            'last_updated',
            'update_user',
            'rowsource',
            'hubid',
            'orgid',
            'projid',
            'id',
        ],
    ]) ?>
	
	
    <?=  //GMS CUSTOM
	//$xyz = array();
	//$xyz = $model->getDataReceipts()->andWhere('id=8')->one();
	//echo "<br><br>Type: '" . gettype($xyz) . "'";
	//$xyz = $model->getDataReceipts2()->andWhere('id=8')->one();
	//echo "<br><br>Type: '" . gettype($xyz) . "'";
	//var_dump(get_object_vars( $model->getDataReceipts() ));
	/*
	var_dump( $model->dataReceipts );
	$childrows = $model->dataReceipts;
	echo "<br><br>1<br>";
	var_dump($childrows[1]["data_received"]);
	*/
	
	$childrows = var_dump( $model->dataReceipts );
	$childrows = $model->dataReceipts;
	$numrows = count($childrows);
    echo "<br><br>NumRows: " .  (string) $numrows . "<br><br>";
	for ($i = 0; $i < $numrows; $i++) 
	{
		echo "<br><br>" . print_r($childrows[$i]["data_received"]);
	}	
    
	?>

</div>
