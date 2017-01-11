<?php
$this->breadcrumbs=array(
	'Propinsi'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Propinsi','url'=>array('index')),
array('label'=>'Tambah Propinsi','url'=>array('create')),
array('label'=>'Update Propinsi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Propinsi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Propinsi','url'=>array('admin')),
);
?>

<h2>Detail Propinsi </h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
),
)); ?>
