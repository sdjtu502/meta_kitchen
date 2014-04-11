<?php
/* @var $this DataRequestController */
/* @var $model DataRequest */

$this->breadcrumbs=array(
	'Data Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataRequest', 'url'=>array('index')),
	array('label'=>'Manage DataRequest', 'url'=>array('admin')),
);
?>

<h1>Create DataRequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>