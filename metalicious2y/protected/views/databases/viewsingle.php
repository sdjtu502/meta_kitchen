<?php
/* @var $this DatabasesController */
/* @var $model Databases */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	$model->Database_ID,
);

$this->menu=array(
	array('label'=>'List Databases', 'url'=>array('index')),
	array('label'=>'Create Databases', 'url'=>array('create')),
	array('label'=>'Update Databases', 'url'=>array('update', 'id'=>$model->Database_ID)),
	array('label'=>'Delete Databases', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Database_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Databases', 'url'=>array('admin')),
);
?>
<!-- METALICIOUS CUSTOM: CHANGE ENTITY NAME TO SINGULAR ('View Database'). [GMS] -->
<!-- <h1>View Databases #<?php echo $model->Database_ID; ?></h1>  -->
<h2>Database #<?php echo $model->Database_ID . " - " . $model->Database_Name ; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Database_ID',
		'Database_Name',
		'Description',
		'Business_Owner',
		'Contact_Information',
		'Data_Period',
		'Software_Platform',
		'General_Accuracy',
		'Comments',
		'Public',
		'Creator',
		'Views',
		'Date_Created',
		'Last_Updated',
	),
)); ?>

