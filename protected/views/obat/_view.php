<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noobat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noobat), array('view', 'id'=>$data->noobat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaobat')); ?>:</b>
	<?php echo CHtml::encode($data->namaobat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisobat')); ?>:</b>
	<?php echo CHtml::encode($data->jenisobat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jmlobat')); ?>:</b>
	<?php echo CHtml::encode($data->jmlobat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produsen')); ?>:</b>
	<?php echo CHtml::encode($data->produsen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expire')); ?>:</b>
	<?php echo CHtml::encode($data->expire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />


</div>