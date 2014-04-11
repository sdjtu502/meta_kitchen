<?php
/* @var $this DataRequestController */
/* @var $model DataRequest */

$this->breadcrumbs=array(
	'Data Requests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DataRequest', 'url'=>array('index')),
	array('label'=>'Create DataRequest', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-request-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Data Requests</h1>

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
	'id'=>'data-request-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'request_date',
		'data_requested',
		'requester',
		'requester_org',
		'requester_email',
		'requester_phone',
		/*
		'need_by_date',
		'data_made_public',
		'descrip',
		'purpose',
		'sources',
		'difficulty_score',
		'importance_score',
		'cost_score',
		'status',
		'status_notes',
		'comments',
		'date_created',
		'creator',
		'last_updated',
		'update_user',
		'hubid',
		'id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
