<?php
/* @var $this VariablesController */
/* @var $model Variables */

$this->breadcrumbs=array(
	'Variables'=>array('index'),
	$model->Variable_ID,
);

$this->menu=array(
	array('label'=>'List Variables', 'url'=>array('index')),
	array('label'=>'Create Variables', 'url'=>array('create')),
	array('label'=>'Update Variables', 'url'=>array('update', 'id'=>$model->Variable_ID)),
	array('label'=>'Delete Variables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Variable_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Variables', 'url'=>array('admin')),
);
?>

<h1>View Variables #<?php echo $model->Variable_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Variable_ID',
		'Variable_Name',
		'Variable_Description',
		'Variable_Type_Format',
		'Variable_Length',
		'Variable_Values',
		'Variable_Example',
		'Variable_Comments',
		'Data_Portal',
		'Public',
		'Creator',
		'Views',
		'Date_Created',
		'Last_Updated',
		'Table_Id',
	),
)); ?>
