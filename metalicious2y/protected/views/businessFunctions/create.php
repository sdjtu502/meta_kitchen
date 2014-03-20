<?php
/* @var $this BusinessFunctionsController */
/* @var $model BusinessFunctions */

$this->breadcrumbs=array(
	'Business Functions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BusinessFunctions', 'url'=>array('index')),
	array('label'=>'Manage BusinessFunctions', 'url'=>array('admin')),
);
?>

<h1>Create BusinessFunctions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>