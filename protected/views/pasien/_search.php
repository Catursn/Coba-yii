<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nopas'); ?>
		<?php echo $form->textField($model,'nopas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namapas'); ?>
		<?php echo $form->textArea($model,'namapas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamatpas'); ?>
		<?php echo $form->textField($model,'alamatpas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telppas'); ?>
		<?php echo $form->textField($model,'telppas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umurpas'); ?>
		<?php echo $form->textField($model,'umurpas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penyakit'); ?>
		<?php echo $form->textField($model,'penyakit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglmsk'); ?>
		<?php echo $form->textField($model,'tglmsk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->