<?php
/* @var $this BusinessFunctionsController */
/* @var $model BusinessFunctions */

$this->breadcrumbs=array(
	'Business Functions'=>array('index'),
	$model->Business_Function_ID=>array('view','id'=>$model->Business_Function_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BusinessFunctions', 'url'=>array('index')),
	array('label'=>'Create BusinessFunctions', 'url'=>array('create')),
	array('label'=>'View BusinessFunctions', 'url'=>array('view', 'id'=>$model->Business_Function_ID)),
	array('label'=>'Manage BusinessFunctions', 'url'=>array('admin')),
);
?>

<h1>Update BusinessFunctions <?php echo $model->Business_Function_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>