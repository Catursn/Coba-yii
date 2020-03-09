<?php
/* @var $this KasirController */
/* @var $model Kasir */

$this->breadcrumbs=array(
	'Kasirs'=>array('index'),
	$model->nokasir,
);

$this->menu=array(
	array('label'=>'List Kasir', 'url'=>array('index')),
	array('label'=>'Create Kasir', 'url'=>array('create')),
	array('label'=>'Update Kasir', 'url'=>array('update', 'id'=>$model->nokasir)),
	array('label'=>'Delete Kasir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nokasir),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kasir', 'url'=>array('admin')),
);
?>

<h1>View Kasir #<?php echo $model->nokasir; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nokasir',
		'namapas',
		'namadok',
		'penyakit',
		'obat',
		'harga',
		'keterangan',
	),
)); ?>
