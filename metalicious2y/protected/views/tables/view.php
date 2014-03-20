<?php
/* @var $this TablesController */
/* @var $model Tables */

$this->breadcrumbs=array(
	'Tables'=>array('index'),
	$model->Table_ID,
);

$this->menu=array(
	array('label'=>'List Tables', 'url'=>array('index')),
	array('label'=>'Create Tables', 'url'=>array('create')),
	array('label'=>'Update Tables', 'url'=>array('update', 'id'=>$model->Table_ID)),
	array('label'=>'Delete Tables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Table_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tables', 'url'=>array('admin')),
);
?>

<!-- METALICIOUS CUSTOM: CHANGE ENTITY NAME TO SINGULAR ('View Table' not 'View Tables'). -->
<!-- <h1>View Tables #<?php echo $model->Table_ID; ?></h1>  -->
<h1>Table: <?php echo $model->Table_Name; ?></h1> 

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Table_ID',
		'Table_Name',
		'Table_Description',
		'Table_Comments',
		'Public',
		'Creator',
		'Views',
		'Date_Created',
		'Last_Updated',
	),
)); ?>


<!-- METALICIOUS CUSTOM: ADD A LIST OF CHILD RECORDS TO THE PARENT DETAIL VIEW PAGE. [GMS] -->
<br /><br />
<font face=arial size=3><b> Columns in this table </b></font>

<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$variableDataProvider,
  'itemView'=>'/variables/_child_view',
  )); 
  /* END CUSTOM */
  ?>


