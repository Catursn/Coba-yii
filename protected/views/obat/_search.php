<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'noobat'); ?>
		<?php echo $form->textField($model,'noobat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaobat'); ?>
		<?php echo $form->textField($model,'namaobat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenisobat'); ?>
		<?php echo $form->textField($model,'jenisobat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jmlobat'); ?>
		<?php echo $form->textField($model,'jmlobat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produsen'); ?>
		<?php echo $form->textField($model,'produsen',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expire'); ?>
		<?php echo $form->textField($model,'expire'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->