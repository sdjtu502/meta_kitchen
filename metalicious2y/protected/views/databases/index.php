<?php
/* @var $this DatabasesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Databases',
);

$this->menu=array(
	array('label'=>'Create Databases', 'url'=>array('create')),
	array('label'=>'Manage Databases', 'url'=>array('admin')),
);
?>

<h1>Databases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
