<?php
/* @var $this VariablesController */
/* @var $model Variables */

$this->breadcrumbs=array(
	'Variables'=>array('index'),
	$model->Variable_ID=>array('view','id'=>$model->Variable_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Variables', 'url'=>array('index')),
	array('label'=>'Create Variables', 'url'=>array('create')),
	array('label'=>'View Variables', 'url'=>array('view', 'id'=>$model->Variable_ID)),
	array('label'=>'Manage Variables', 'url'=>array('admin')),
);
?>

<h1>Update Variables <?php echo $model->Variable_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>