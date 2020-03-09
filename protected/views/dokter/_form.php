<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nodok'); ?>
		<?php echo $form->textField($model,'nodok'); ?>
		<?php echo $form->error($model,'nodok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namadok'); ?>
		<?php echo $form->textField($model,'namadok',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'namadok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamatdok'); ?>
		<?php echo $form->textField($model,'alamatdok',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamatdok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telpdok'); ?>
		<?php echo $form->textField($model,'telpdok',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telpdok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ttldok'); ?>
		<?php echo $form->textField($model,'ttldok'); ?>
		<?php echo $form->error($model,'ttldok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spesialis'); ?>
		<?php echo $form->textField($model,'spesialis',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spesialis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'universitas'); ?>
		<?php echo $form->textField($model,'universitas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'universitas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->