<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;  //GMS CUSTOM

/**
 * @var yii\web\View $this
 * @var frontend\models\OutboundDataRequest $model
 */

//GMS CUSTOM display "Data Requested" NOT ID. $this->title = $model->id;
$this->title = $model->data_source_abbrev . ": " . $model->data_requested;   //End CUSTOM
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
            'data_source_abbrev',
            'request_date',
            'data_requested',
            'requester',
            //'requester_org',
            //'requester_email:email',
            //'requester_phone',
            //'provider_org',
            //'provider_name',
            //'provider_email:email',
            //'provider_phone',
            //'need_by_date',
            //'description',
            //'purpose',
            //'data_made_public:boolean',
            //'data_sharing_agrmnt_status',
            'status',
            //'status_notes',
            'last_follow_up',
            'receipt_date',
            're_request_date',
            //'data_set_abbrev',
            //'verified_by',
            //'verified_date',
            'verification_notes',
            'category',
            'subcategory',
            //'data_set',
            //'data_source',
            //'comments',
            //'date_created',
            //'creator',
            //'last_updated',
            //'update_user',
            //'rowsource',
            //'hubid',
            //'orgid',
            //'projid',
            //'id',
        ],
    ]) ?>
	
	
    <?php
	//GMS CUSTOM - display DataReceipts for this DataSet (if any found), extracted from the Chapin Hall data enclave
	/* $childrows = $model->dataReceipts; */
	//var_dump($model->dataReceipts);
	echo "<h2>Data receipts related to this data set</h2>";
	echo "<table id='datareceipt' name='datareceipt' border=0 cellpadding=5>";
	for ($i = 0; $i < count($model->dataReceipts); $i++) 
	{
        $data_requested = (string)$model->dataReceipts[$i]["data_received"];
		$detail_url = (string)$model->dataReceipts[$i]["detail_url"];
		echo "<tr>";
		echo "<td bgcolor=darkcyan><font face=arial size=2 color=darkgray>" . (string)$model->dataReceipts[$i]["data_source_abbrev"] . "</td>";
		if(empty($data_requested) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
			echo "<td bgcolor=darkcyan><font face=arial size=2 color=darkgray>" . (string)$model->dataReceipts[$i]["data_received"] . "</font></td>";
		} else {                                                       //If complete information, display a live URL
			echo "<td bgcolor=darkcyan><a href='" . (string)$model->dataReceipts[$i]["detail_url"] . "'><font face=arial size=2 color=darkblue>" . (string)$model->dataReceipts[$i]["data_received"] . "</a></font></td>";
		}
		echo "<td bgcolor=darkcyan><font face=arial size=2 color=darkgray>" . (string)$model->dataReceipts[$i]["export_date"] . "</font></td>";
		echo "</tr>";
	}	
	echo "</table>";
	//END GMS CUSTOM
	?>

</div>
