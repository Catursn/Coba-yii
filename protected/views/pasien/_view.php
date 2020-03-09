<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nopas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nopas), array('view', 'id'=>$data->nopas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapas')); ?>:</b>
	<?php echo CHtml::encode($data->namapas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatpas')); ?>:</b>
	<?php echo CHtml::encode($data->alamatpas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telppas')); ?>:</b>
	<?php echo CHtml::encode($data->telppas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umurpas')); ?>:</b>
	<?php echo CHtml::encode($data->umurpas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyakit')); ?>:</b>
	<?php echo CHtml::encode($data->penyakit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglmsk')); ?>:</b>
	<?php echo CHtml::encode($data->tglmsk); ?>
	<br />

</div>