<?php
/* @var $this DatabasesController */
/* @var $model Databases */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Database_ID'); ?>
		<?php echo $form->textField($model,'Database_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Database_Name'); ?>
		<?php echo $form->textField($model,'Database_Name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>8000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Business_Owner'); ?>
		<?php echo $form->textField($model,'Business_Owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_Information'); ?>
		<?php echo $form->textField($model,'Contact_Information',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Data_Period'); ?>
		<?php echo $form->textField($model,'Data_Period',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Software_Platform'); ?>
		<?php echo $form->textField($model,'Software_Platform',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'General_Accuracy'); ?>
		<?php echo $form->textField($model,'General_Accuracy',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comments'); ?>
		<?php echo $form->textField($model,'Comments',array('size'=>60,'maxlength'=>2000)); ?>
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