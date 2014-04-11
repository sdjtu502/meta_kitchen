<?php
/* @var $this DataSetController */
/* @var $model DataSet */

$this->breadcrumbs=array(
	'Data Sets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataSet', 'url'=>array('index')),
	array('label'=>'Create DataSet', 'url'=>array('create')),
	array('label'=>'View DataSet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataSet', 'url'=>array('admin')),
);
?>

<!-- <h1>Update DataSet <?php echo $model->id; ?></h1> -->
<h1> UPDATE  <?php echo $model->data_set_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>