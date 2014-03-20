<?php
/* @var $this DatabasesController */
/* @var $model Databases */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Databases', 'url'=>array('index')),
	array('label'=>'Create Databases', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#databases-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Databases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'databases-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Database_ID',
		'Database_Name',
		'Description',
		'Business_Owner',
		'Contact_Information',
		'Data_Period',
		/*
		'Software_Platform',
		'General_Accuracy',
		'Comments',
		'Public',
		'Creator',
		'Views',
		'Date_Created',
		'Last_Updated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
