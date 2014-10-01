<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\DataSource $model
 */

//GMS CUSTOM change title to name, not ID#
//$this->title = $model->id;
$this->title = $model->data_source_name;
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
            //'restricted:boolean',
            //'terms_of_use',
            //'nmfldfordatsrc',
            'contracts',
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
            'comments',
            //'id',
        ],
    ]) ?>

	<?php
	//GMS CHAPIN HALL CUSTOM - fetch DataSets and other items associated with this DataSource

	//DATASETS
	echo "<h2>Data sets related to this data source</h2>";
	echo "<table id='dataset' name='dataset' border=0 cellpadding=5>";
	for ($i = 0; $i < count($model->dataSets); $i++) 
	{
        $data_set_name = (string)$model->dataSets[$i]["data_set_name"];
		$detail_url = "index.php?r=dataset/view&id=" . (string)$model->dataSets[$i]["id"];
		echo "<tr>";
		if(empty($data_set_name) or empty($detail_url)){              //If incomplete information, don't attempt to display a live URL
			echo "<td bgcolor=PaleTurquoise><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataSets[$i]["data_set_name"] . "</font></td>";
		} else {                                                       //If complete information, display a live URL
			echo "<td bgcolor=PaleTurquoise><a href='" . $detail_url . "'><font face=arial size=2 color=darkblue>" . (string)$model->dataSets[$i]["data_set_name"] . "</a></font></td>";
		}
		//echo "<td bgcolor=PaleTurquoise><font face=arial size=2 color=DarkSlateGray>" . (string)$model->dataSets[$i]["data_set_abbrev"] . "</font></td>";
		echo "</tr>";
	}	
	echo "</table>";
	
	//END GMS CUSTOM
	?>
	
</div>
