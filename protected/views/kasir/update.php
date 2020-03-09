<?php
/* @var $this KasirController */
/* @var $model Kasir */

$this->breadcrumbs=array(
	'Kasirs'=>array('index'),
	$model->nokasir=>array('view','id'=>$model->nokasir),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kasir', 'url'=>array('index')),
	array('label'=>'Create Kasir', 'url'=>array('create')),
	array('label'=>'View Kasir', 'url'=>array('view', 'id'=>$model->nokasir)),
	array('label'=>'Manage Kasir', 'url'=>array('admin')),
);
?>

<h1>Update Kasir <?php echo $model->nokasir; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>