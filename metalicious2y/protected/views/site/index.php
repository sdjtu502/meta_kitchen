<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<style type='text/css'> 
h1 { font-family:arial,palatino,calibri; font-weight:bold; font-size: 26px;}
h2 { font-family:arial,palatino,calibri; font-weight:normal; font-size: 20px;}
h3 { font-family:arial,palatino,calibri; font-weight:normal; font-size: 16px;}
.metlis2_main { border-spacing:0px; border:0px; border-collapse:collapse; margin:0px; border-style:none; border-width:0;} 
td { background-color:#FDFFEF; font-family:arial,cambria,palatino,calibri; font-style:normal; font-size: 16px; }

</style>

<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<h2>The City of Chicago's online data dictionary</h2>

<h3>&nbsp; Explore: </h3>
<table class='metlis2_main'>
	<tr><td>&nbsp;</td><td><a href='index.php?r=businessFunctions'>Business Functions</a></td></tr>
	<tr><td>&nbsp;</td><td><a href='index.php?r=databases'>Databases</a></td></tr>
	<tr><td>&nbsp;</td><td><a href='index.php?r=tables'>Data Tables</a></td></tr>
</table>
