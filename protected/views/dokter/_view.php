<?php
/* @var $this DokterController */
/* @var $data Dokter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nodok')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nodok), array('view', 'id'=>$data->nodok)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namadok')); ?>:</b>
	<?php echo CHtml::encode($data->namadok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatdok')); ?>:</b>
	<?php echo CHtml::encode($data->alamatdok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telpdok')); ?>:</b>
	<?php echo CHtml::encode($data->telpdok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttldok')); ?>:</b>
	<?php echo CHtml::encode($data->ttldok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->spesialis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('universitas')); ?>:</b>
	<?php echo CHtml::encode($data->universitas); ?>
	<br />


</div>