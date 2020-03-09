<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->noobat=>array('view','id'=>$model->noobat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'View Obat', 'url'=>array('view', 'id'=>$model->noobat)),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Update Obat <?php echo $model->noobat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>