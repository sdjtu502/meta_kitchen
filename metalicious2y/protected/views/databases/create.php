<?php
/* @var $this DatabasesController */
/* @var $model Databases */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Databases', 'url'=>array('index')),
	array('label'=>'Manage Databases', 'url'=>array('admin')),
);
?>

<h1>Create Databases</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>