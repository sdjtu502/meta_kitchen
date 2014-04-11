<?php
/* @var $this DataSetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Sets',
);

$this->menu=array(
	array('label'=>'Create DataSet', 'url'=>array('create')),
	array('label'=>'Manage DataSet', 'url'=>array('admin')),
);
?>

<h1>Data Sets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
