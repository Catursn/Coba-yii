<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no), array('view', 'id'=>$data->no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapas')); ?>:</b>
	<?php echo CHtml::encode($data->namapas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namadok')); ?>:</b>
	<?php echo CHtml::encode($data->namadok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat')); ?>:</b>
	<?php echo CHtml::encode($data->obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />


</div>