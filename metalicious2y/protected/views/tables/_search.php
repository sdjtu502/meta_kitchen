<?php
/* @var $this TablesController */
/* @var $model Tables */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Table_ID'); ?>
		<?php echo $form->textField($model,'Table_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Table_Name'); ?>
		<?php echo $form->textField($model,'Table_Name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Table_Description'); ?>
		<?php echo $form->textField($model,'Table_Description',array('size'=>60,'maxlength'=>8000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Table_Comments'); ?>
		<?php echo $form->textField($model,'Table_Comments',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Public'); ?>
		<?php echo $form->textField($model,'Public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Creator'); ?>
		<?php echo $form->textField($model,'Creator'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Views'); ?>
		<?php echo $form->textField($model,'Views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date_Created'); ?>
		<?php echo $form->textField($model,'Date_Created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Last_Updated'); ?>
		<?php echo $form->textField($model,'Last_Updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->