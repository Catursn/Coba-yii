<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nodok'); ?>
		<?php echo $form->textField($model,'nodok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namadok'); ?>
		<?php echo $form->textField($model,'namadok',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamatdok'); ?>
		<?php echo $form->textField($model,'alamatdok',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telpdok'); ?>
		<?php echo $form->textField($model,'telpdok',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ttldok'); ?>
		<?php echo $form->textField($model,'ttldok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spesialis'); ?>
		<?php echo $form->textField($model,'spesialis',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'universitas'); ?>
		<?php echo $form->textField($model,'universitas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->