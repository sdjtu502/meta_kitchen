<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\Datadict $model
 */

//GMS CHAPIN HALL CUSTOM $this->title = $model->id;    //Display Datadict Name, not ID
$this->title = $model->datadict_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Datadicts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datadict-view">

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
            'datadict_name',
            'time_period',
            'dataset_abbrev',
            'dict_file_name',
            //'dict_file_location',
            'dict_file_type',
            'data_file_name',
            //'data_file_location',
            'data_file_type',
            //'datadict_types',
            'etl_stage',
            //'source_data_table',
            //'dataset',
            'comments',
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

	<?php
	//GMS CHAPIN HALL CUSTOM - fetch DataDictRows and other items associated with this DataDict

	//DATADICT ROWS
	echo "<h2>Items included in this data dictionary</h2>";
	echo "<table id='datadictrow' name='datadictrow' border=0 cellpadding=5>";
	for ($i = 0; $i < count($model->dataDictRows); $i++) 
	{
        $column_name = (string)$model->dataDictRows[$i]["column_name"];
		$detail_url = "index.php?r=datadictrow/view&id=" . (string)$model->dataDictRows[$i]["id"];
		echo "<tr>";
		//echo "<td bgcolor=lightgreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDictRows[$i]["column_name"] . "</td>";
		if(empty($column_name) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
			echo "<td bgcolor=lightgreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDictRows[$i]["column_name"] . "</font></td>";
		} else {                                                       //If complete information, display a live URL
			echo "<td bgcolor=lightgreen><a href='" . $detail_url . "'><font face=arial size=2 color=darkblue>" . (string)$model->dataDictRows[$i]["column_name"] . "</a></font></td>";
		}
		echo "<td bgcolor=lightgreen><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataDictRows[$i]["description"] . "</font></td>";
		echo "</tr>";
	}	
	echo "</table>";
	echo "<br />";
	//END GMS CUSTOM
	?>
	
</div>
