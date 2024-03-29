<?php
/* @var $this VariablesController */
/* @var $model Variables */

$this->breadcrumbs=array(
	'Variables'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Variables', 'url'=>array('index')),
	array('label'=>'Create Variables', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#variables-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Variables</h1>

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
	'id'=>'variables-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Variable_ID',
		'Variable_Name',
		'Variable_Description',
		'Variable_Type_Format',
		'Variable_Length',
		'Variable_Values',
		/*
		'Variable_Example',
		'Variable_Comments',
		'Data_Portal',
		'Public',
		'Creator',
		'Views',
		'Date_Created',
		'Last_Updated',
		'Table_Id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
