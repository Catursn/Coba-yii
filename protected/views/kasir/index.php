<?php
/* @var $this KasirController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kasir',
);

$this->menu=array(
	array('label'=>'Create Kasir', 'url'=>array('create')),
	array('label'=>'Manage Kasir', 'url'=>array('admin')),
);
?>

<h1>Kasir</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
