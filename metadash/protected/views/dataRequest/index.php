<?php
/* @var $this DataRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Requests',
);

$this->menu=array(
	array('label'=>'Create DataRequest', 'url'=>array('create')),
	array('label'=>'Manage DataRequest', 'url'=>array('admin')),
);
?>

<h1>Data Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
