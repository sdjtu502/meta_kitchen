<?php
/* @var $this BusinessFunctionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Business Functions',
);

$this->menu=array(
	array('label'=>'Create BusinessFunctions', 'url'=>array('create')),
	array('label'=>'Manage BusinessFunctions', 'url'=>array('admin')),
);
?>

<h1>Business Functions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
