<?php
/* @var $this KasirController */
/* @var $data Kasir */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nokasir')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nokasir), array('view', 'id'=>$data->nokasir)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapas')); ?>:</b>
	<?php echo CHtml::encode($data->namapas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namadok')); ?>:</b>
	<?php echo CHtml::encode($data->namadok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyakit')); ?>:</b>
	<?php echo CHtml::encode($data->penyakit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat')); ?>:</b>
	<?php echo CHtml::encode($data->obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>