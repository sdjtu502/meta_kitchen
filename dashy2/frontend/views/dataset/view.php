<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSet $model
 */

//CHAPIN HALL CUSTOM $this->title = $model->id;   Display Name, not ID
$this->title = $model->data_set_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Data Sets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-view">

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
            'data_set_name',
            'data_set_abbrev',
            //'data_source',
            'data_source_name',
            'data_source_abbrev',
            //'access_restricted:boolean',
            //'public:boolean',
            //'metadata_public:boolean',
            //'data_public:boolean',
            'description',
            'terms_of_use',
            //'software_platform',
            //'other_platform',
            'overall_quality',
            'overall_accuracy',
            'overall_completeness',
            //'matchability',
            'periodicity',
            'granularity',
            //'first_received',
            //'most_recent_update',
            'initial_import_est_hours',
            'initial_import_comments',
            'routine_import_est_hours',
            'routine_import_comments',
            //'data_quality_score',
            //'importance_score',
            //'difficulty_score',
            //'cost_score',
            //'data_cost_est',
            //'data_cost_timeperiod',
            //'data_cost_comments',
            //'owner',
            //'contact_name',
            //'contact_email:email',
            //'contact_phone',
            //'contact_fax',
            //'contact_address',
            //'contact_address2',
            //'contact_address3',
            //'contact_city',
            //'contact_state',
            //'contact_zip',
            //'url1:url',
            //'url2:url',
            //'url3:url',
            //'internal_location',
            'transfer_method',
            'comments',
            //'creator',
            //'update_user',
            //'date_created',
            //'last_updated',
            //'views',
            //'business_owner',
            //'contact_information',
            //'exclude:boolean',
            //'delete_row:boolean',
            //'import_flag',
            //'database_name',
            //'rowsource',
            //'hubid',
            //'orgid',
            //'projid',
            'id',
        ],
    ])  ?>

	<?php
	//GMS CHAPIN HALL CUSTOM - fetch DataRequests, DataReceipts, DataDicts and other items associated with this DataSet

	//OUTBOUND DATA REQUESTS
	if(count($model->outboundDatarequests)){
		echo "<h2>Outbound Data Requests related to this data set</h2>";
		echo "<table id='datadict' name='datadict' border=0 cellpadding=5>";
		for ($i = 0; $i < count($model->outboundDatarequests); $i++) 
		{
			$data_requested = (string)$model->outboundDatarequests[$i]["data_requested"];
			$detail_url = "index.php?r=outbounddatarequest/view&id=" . (string)$model->outboundDatarequests[$i]["id"];
			echo "<tr>";
			//echo "<td bgcolor=MediumAquaMarine><font face=arial size=2 color=DarkSlateGray>" . (string)$model->outboundDatarequests[$i]["data_requested"] . "</td>";
			if(empty($data_requested) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
				echo "<td bgcolor=MediumAquaMarine><font face=arial size=2 color=DarkSlateGray>" . (string)$model->outboundDatarequests[$i]["data_requested"] . "</font></td>";
			} else {                                                       //If complete information, display a live URL
				echo "<td bgcolor=MediumAquaMarine><a href='" . $detail_url . "'><font face=arial size=2 color=darkblue>" . (string)$model->outboundDatarequests[$i]["data_requested"] . "</a></font></td>";
			}
			echo "<td bgcolor=MediumAquaMarine><font face=arial size=2 color=DarkSlateGray>" . (string)$model->outboundDatarequests[$i]["request_date"] . "</font></td>";
			echo "</tr>";
		}	
		echo "</table>";
		echo "<br />";
	}
	
	//DATA RECEIPTS
	/* $childrows = $model->dataReceipts; */
	//var_dump($model->dataReceipts);
	if(count($model->dataReceipts)){
		echo "<h2>Data receipts related to this data set</h2>";
		echo "<table id='datareceipt' name='datareceipt' border=0 cellpadding=5>";
		for ($i = 0; $i < count($model->dataReceipts); $i++) 
		{
			$data_requested = (string)$model->dataReceipts[$i]["data_received"];
			$detail_url = (string)$model->dataReceipts[$i]["detail_url"];
			echo "<tr>";
			echo "<td bgcolor=darkseagreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataReceipts[$i]["data_source_abbrev"] . "</td>";
			if(empty($data_requested) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
				echo "<td bgcolor=darkseagreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataReceipts[$i]["data_received"] . "</font></td>";
			} else {                                                       //If complete information, display a live URL
				echo "<td bgcolor=darkseagreen><a href='" . (string)$model->dataReceipts[$i]["detail_url"] . "'><font face=arial size=2 color=darkblue>" . (string)$model->dataReceipts[$i]["data_received"] . "</a></font></td>";
			}
			echo "<td bgcolor=darkseagreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataReceipts[$i]["export_date"] . "</font></td>";
			echo "</tr>";
		}	
		echo "</table>";
		echo "<br />";
	}
	
	//DATA DICTIONARIES
	if(count($model->dataDicts)){
		echo "<h2>Data dictionaries related to this data set</h2>";
		echo "<table id='datadict' name='datadict' border=0 cellpadding=5>";

		for ($i = 0; $i < count($model->dataDicts); $i++) 
		{
			$datadict_name = (string)$model->dataDicts[$i]["datadict_name"];
			$detail_url = "index.php?r=datadict/view&id=" . (string)$model->dataDicts[$i]["id"];
			echo "<tr>";
			//echo "<td bgcolor=PaleTurquoise><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDicts[$i]["datadict_name"] . "</td>";
			if(empty($datadict_name) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
				echo "<td bgcolor=PaleTurquoise><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDicts[$i]["datadict_name"] . "</font></td>";
			} else {                                                       //If complete information, display a live URL
				echo "<td bgcolor=PaleTurquoise><a href='" . $detail_url . "'><font face=arial size=2 color=darkblue>" . (string)$model->dataDicts[$i]["datadict_name"] . "</a></font></td>";
			}
			echo "<td bgcolor=PaleTurquoise><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDicts[$i]["time_period"] . "</font></td>";
			echo "</tr>";
		}
		echo "</table>";
	}	
	
	//END GMS CUSTOM
	?>


</div>
