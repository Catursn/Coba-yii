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
		<?php echo $form->label($model2,'nopas'); ?>
		<?php echo $form->textField($model2,'nopas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'namapas'); ?>
		<?php echo $form->textArea($model2,'namapas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'alamatpas'); ?>
		<?php echo $form->textField($model2,'alamatpas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'telppas'); ?>
		<?php echo $form->textField($model2,'telppas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'umurpas'); ?>
		<?php echo $form->textField($model2,'umurpas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'penyakit'); ?>
		<?php echo $form->textField($model2,'penyakit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model2,'tglmsk'); ?>
		<?php echo $form->textField($model2,'tglmsk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->