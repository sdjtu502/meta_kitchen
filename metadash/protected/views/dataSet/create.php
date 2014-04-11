<?php
/* @var $this DataSetController */
/* @var $model DataSet */

$this->breadcrumbs=array(
	'Data Sets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataSet', 'url'=>array('index')),
	array('label'=>'Manage DataSet', 'url'=>array('admin')),
);
?>

<h1>Create DataSet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>