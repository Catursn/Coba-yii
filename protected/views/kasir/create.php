<?php
/* @var $this KasirController */
/* @var $model Kasir */

$this->breadcrumbs=array(
	'Kasirs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kasir', 'url'=>array('index')),
	array('label'=>'Manage Kasir', 'url'=>array('admin')),
);
?>

<h1>Create Kasir</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>