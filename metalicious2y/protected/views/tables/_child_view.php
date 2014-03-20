<?php
/* @var $this TablesController */
/* @var $data Tables */
?>

<!-- METALICIOUS CUSTOM: REDUCE THE NUMBER OF FIELDS DISPLAYED FOR CHILD RECORDS, SINCE THIS VIEW IS INTENDED TO LIST JUST BASIC INFO FOR EACH CHILD, ON PARENT DETAIL PAGE. [GMS 3/18/14] -->
<style type='text/css'> 
.metlis2_childview { border-spacing:0px; border:0px; border-collapse:collapse; margin:0px; border-style:none; border-width:0;} 
.td { padding:0px; margin:0px; border:0px; border-style:none; border-width:0;} 
</style>

<div class="view">

	<?php
	/* METALICIOUS CUSTOM: REDUCE THE NUMBER OF FIELDS DISPLAYED FOR CHILD RECORDS, SINCE THIS VIEW IS INTENDED TO LIST JUST BASIC INFO FOR EACH CHILD, ON PARENT DETAIL PAGE. [GMS 3/18/14] */
	/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_ID')); ?>:</b>
	<?php /* METALICIOUS CUSTOM: DISPLAY ID AS PLAIN TEXT, NOT HYPERLINK. echo CHtml::link(CHtml::encode($data->Table_ID), array('view', 'id'=>$data->Table_ID));  ?>
	<?php echo CHtml::encode($data->Table_ID); ?>
	<br />
	*/ ?>
	
	<table class='metlis2_childview' border=0 cellpadding=0 cellspacing=0>
	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('Table_Name')); ?>:</b> -->
	<?php /* METALICIOUS CUSTOM: DISPLAY NAME AS HYPERLINK, NOT PLAIN TEXT.  echo CHtml::encode($data->Table_Name); */ ?>
	<tr><td width='30%'> <?php echo CHtml::link(CHtml::encode($data->Table_Name), array('tables/view', 'id'=>$data->Table_ID)); ?>  </td> 
	<!-- <br />  -->

	<?php /* echo CHtml::encode($data->getAttributeLabel('Table_Description')); */ ?>
	<td width='70%'> <?php echo CHtml::encode($data->Table_Description); ?> </td></tr>
	</table>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Table_Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Table_Comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Public')); ?>:</b>
	<?php echo CHtml::encode($data->Public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Creator')); ?>:</b>
	<?php echo CHtml::encode($data->Creator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Views')); ?>:</b>
	<?php echo CHtml::encode($data->Views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date_Created')); ?>:</b>
	<?php echo CHtml::encode($data->Date_Created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last_Updated')); ?>:</b>
	<?php echo CHtml::encode($data->Last_Updated); ?>
	<br />

	*/ ?>

</div>