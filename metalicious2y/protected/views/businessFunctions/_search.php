<?php
/* @var $this BusinessFunctionsController */
/* @var $model BusinessFunctions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Business_Function_ID'); ?>
		<?php echo $form->textField($model,'Business_Function_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Business_Function_Name'); ?>
		<?php echo $form->textField($model,'Business_Function_Name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Business_Function_Description'); ?>
		<?php echo $form->textField($model,'Business_Function_Description',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->