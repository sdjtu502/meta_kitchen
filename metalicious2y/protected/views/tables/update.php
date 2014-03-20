<?php
/* @var $this TablesController */
/* @var $model Tables */

$this->breadcrumbs=array(
	'Tables'=>array('index'),
	$model->Table_ID=>array('view','id'=>$model->Table_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tables', 'url'=>array('index')),
	array('label'=>'Create Tables', 'url'=>array('create')),
	array('label'=>'View Tables', 'url'=>array('view', 'id'=>$model->Table_ID)),
	array('label'=>'Manage Tables', 'url'=>array('admin')),
);
?>

<h1>Update Tables <?php echo $model->Table_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>