<?php
/* @var $this BusinessFunctionsController */
/* @var $model BusinessFunctions */

$this->breadcrumbs=array(
	'Business Functions'=>array('index'),
	$model->Business_Function_ID,
);

$this->menu=array(
	array('label'=>'List BusinessFunctions', 'url'=>array('index')),
	array('label'=>'Create BusinessFunctions', 'url'=>array('create')),
	array('label'=>'Update BusinessFunctions', 'url'=>array('update', 'id'=>$model->Business_Function_ID)),
	array('label'=>'Delete BusinessFunctions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Business_Function_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BusinessFunctions', 'url'=>array('admin')),
);
?>

<!-- METALICIOUS CUSTOM: CHANGE ENTITY NAME TO SINGULAR. [GMS] -->
<!-- <h1>View BusinessFunctions #<?php echo $model->Business_Function_ID; ?></h1> -->
<h1>BusinessFunction:  <?php echo $model->Business_Function_Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Business_Function_ID',
		'Business_Function_Name',
		'Business_Function_Description',
	),
)); ?>


<!-- METALICIOUS CUSTOM: ADD A LIST OF CHILD RECORDS TO THE PARENT DETAIL VIEW PAGE. [GMS] -->
<br /><br /><br />
<font face=arial size=3><b> Databases in this business function</b></font>

<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$databaseDataProvider,
  'itemView'=>'/databases/_child_view',
  )); 
  /* END CUSTOM */
  ?>

