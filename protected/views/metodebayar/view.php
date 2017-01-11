<?php
$this->breadcrumbs=array(
	'Metodebayars'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Metodebayar','url'=>array('index')),
array('label'=>'Tambah Metode Bayar','url'=>array('create')),
array('label'=>'Update Metode Bayar','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Metode Bayar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Metode Bayar','url'=>array('admin')),
);
?>

<h2>Detail Metode Bayar</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
),
)); ?>
