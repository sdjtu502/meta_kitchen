<?php
/* @var $this DatabasesController */
/* @var $model Databases */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	$model->Database_ID=>array('view','id'=>$model->Database_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Databases', 'url'=>array('index')),
	array('label'=>'Create Databases', 'url'=>array('create')),
	array('label'=>'View Databases', 'url'=>array('view', 'id'=>$model->Database_ID)),
	array('label'=>'Manage Databases', 'url'=>array('admin')),
);
?>

<h1>Update Databases <?php echo $model->Database_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>