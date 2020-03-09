<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokters'=>array('index'),
	$model->nodok,
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
	array('label'=>'Update Dokter', 'url'=>array('update', 'id'=>$model->nodok)),
	array('label'=>'Delete Dokter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nodok),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dokter', 'url'=>array('admin')),
);
?>

<h1>View Dokter #<?php echo $model->nodok; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nodok',
		'namadok',
		'alamatdok',
		'telpdok',
		'ttldok',
		'spesialis',
		'universitas',
	),
)); ?>
