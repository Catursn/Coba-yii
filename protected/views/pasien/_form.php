<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nopas'); ?>
		<?php echo $form->textField($model,'nopas'); ?>
		<?php echo $form->error($model,'nopas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namapas'); ?>
		<?php echo $form->textArea($model,'namapas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'namapas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamatpas'); ?>
		<?php echo $form->textField($model,'alamatpas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamatpas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telppas'); ?>
		<?php echo $form->textField($model,'telppas'); ?>
		<?php echo $form->error($model,'telppas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'umurpas'); ?>
		<?php echo $form->textField($model,'umurpas'); ?>
		<?php echo $form->error($model,'umurpas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyakit'); ?>
		<?php echo $form->textField($model,'penyakit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'penyakit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglmsk'); ?>
		<?php echo $form->textField($model,'tglmsk'); ?>
		<?php echo $form->error($model,'tglmsk'); ?>
	</div> 
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->