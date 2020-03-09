<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no'); ?>
		<?php echo $form->textField($model,'no'); ?>
		<?php echo $form->error($model,'no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namapas'); ?>
		<?php echo $form->textField($model,'namapas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'namapas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namadok'); ?>
		<?php echo $form->textField($model,'namadok',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'namadok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat'); ?>
		<?php echo $form->textField($model,'obat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->