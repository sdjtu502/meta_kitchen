<?php
/* @var $this VariablesController */
/* @var $model Variables */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Variable_ID'); ?>
		<?php echo $form->textField($model,'Variable_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Name'); ?>
		<?php echo $form->textField($model,'Variable_Name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Description'); ?>
		<?php echo $form->textField($model,'Variable_Description',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Type_Format'); ?>
		<?php echo $form->textField($model,'Variable_Type_Format',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Length'); ?>
		<?php echo $form->textField($model,'Variable_Length',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Values'); ?>
		<?php echo $form->textField($model,'Variable_Values',array('size'=>60,'maxlength'=>3000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Example'); ?>
		<?php echo $form->textField($model,'Variable_Example',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Variable_Comments'); ?>
		<?php echo $form->textField($model,'Variable_Comments',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Data_Portal'); ?>
		<?php echo $form->textField($model,'Data_Portal',array('size'=>1,'maxlength'=>1)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'Table_Id'); ?>
		<?php echo $form->textField($model,'Table_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->